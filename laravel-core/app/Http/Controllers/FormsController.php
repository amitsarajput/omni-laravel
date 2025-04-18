<?php

namespace App\Http\Controllers;

use App\Models\Forms;
use Illuminate\Http\Request;

use Mail;
use App\Mail\GenricMail;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class FormsController extends Controller
{
    public function lb_state_update(Request $request){
        $this->validate($request, [
            'formdata' => 'required'
        ]);
        $req=$request->only('formdata');
        $formdata=(integer) $req['formdata'];
        session(['omni_data.bubble_closed'=>$formdata]);
        return false;
    }

    public function location_form(Request $request){
        //dd($request->location);
        $this->validate($request, [
            'location' => 'required'
        ]);
        
        $new_loc=$request->location;            
        $omni_data=session('omni_data');
        
        //If not avialable
        if (!in_array($new_loc, $omni_data['available_locations'])) { 
            return redirect()->back();
        }
        
            //dd($request->location);
            $to_url=$omni_data['slugs'][$new_loc];
            // check if omni redirect
            $this->omni_redirect($to_url);

            $omni_data=$this->set_session_region_country($to_url,$omni_data);
            //adjust url according to the refferer.
            $to_url=$this->refer($request, strtolower($omni_data['slugs'][$omni_data['preffered_location']]), $to_url);
            //dd($to_url);
            
            //Set language session and omni session data
            $locale=$omni_data['available_locales'][$new_loc];
            $omni_data['preffered_location']=$new_loc;
            $omni_data['bubble_closed']=1;
            session(['locale' => $locale]);
            session(['omni_data' => $omni_data]);  
            
            // $fakeRequest = Request::create($to_url, 'GET');
            // try {
                //     // Dispatch the fake request
                //     $response = app()->handle($fakeRequest);
                
                //     // If status is 200, it's good to redirect
                //     if ($response->getStatusCode() === 200) {
                    //         return redirect($to_url);
                    //     }
                    // } catch (NotFoundHttpException $e) {
                        //     // If the controller calls abort(404), it will throw here
                        // } catch (\Exception $e) {
                            //     // Catch other possible exceptions
                            // }
                            //dd(session('omni_data'));
            //dd($request->location,$omni_data);
            return redirect($to_url);
            //return redirect()->route('home');
            
    }

    public function omni_redirect($to_url){
        return match ($to_url) {
            'us' => redirect()->to('https://www.omni-united.com/radar-us')->send(),
            'ca' => redirect()->to('https://www.omni-united.com/radar-ca')->send(),
            'mea', 'row' => redirect()->to('https://www.omni-united.com/radar')->send(),
            default => false,
        };
    }

    public function set_session_region_country($to_url,$omni_data){
        $url_sets=explode('/', $to_url);
        if (count($url_sets) > 1) {
            $omni_data['region']=$url_sets[0];
            $omni_data['country']=$url_sets[1];
        }else {
            $omni_data['region']=$url_sets[0];
            $omni_data['country']=null;
        }
        return $omni_data;
    }

    public function refer(Request $request,$old, $new){
        $referrer = $request->headers->get('referer');
        if ($referrer) {
            $referrerHost = parse_url($referrer, PHP_URL_HOST);
            $referrerPath = parse_url($referrer, PHP_URL_PATH) ?? '/';
            $currentHost = $request->getHost();
            if ($referrerHost === $currentHost) {
                // Only replace if the part exists
                if (str_contains($referrer, $old)) {
                    $updatedUrl = str_replace($old, $new, $referrer);
                } else {
                    $updatedUrl = $referrerPath=='/'? $referrer.'/'.$new:$referrer ;
                }
            } 
        }
        //dd($updatedUrl);
        return $updatedUrl;
    }

    public function form_contact(Request $request) {
        $validatedData =$request->validate([
            'g-recaptcha-response' => 'required',
            'name' => ['string','required'],
            'email' => ['email','required'],
            'country' => ['string','required'],
            'message' => ['string','required', 'max:500'],
            'url_current' => ['string','required', 'url:http,https'],
        ]);
        $recaptcha = app('recaptcha');
        if (!$recaptcha->verify($request->input('g-recaptcha-response'))) {
            return back()->withErrors(['captcha' => 'Captcha verification failed.']);
        }
        if ($request->phone !== null) {
            return back()->with('status','Email Not sent.');
        }
        $form_data=[
            'name' =>  $request->name,
            'email' => strtolower($request->email),
            'country' => strtolower($request->country),
            'message' => strtolower($request->message),
            'url_current' => strtolower($request->url_current)
        ];
        $form = Forms::create([
            'type' => 'form--contact',
            'form_data' => json_encode($form_data)
        ]);

        //$to=['manavsuri@omni-united.com','amit@lopamudracreative.com'];
        $to=['info@radartires.com'];
        try {
            Mail::to($to)->send(new GenricMail($form_data));
            return back()->with('status','Message sent successfully.');
        } catch (\Exception $e) {
            return back()->with('status','Sorry! Please try again later');
        }
        
        //Mail::to($to)->send(new GenricMail($form_data));


        return back()->with('status','Sorry! Please try again later');

    }

    public function form_dealerlocator(Request $request) {
        $validatedData =$request->validate([
            'g-recaptcha-response' => 'required',
            'name' => ['string','required'],
            'email' => ['email','required'],
            'location' => ['string','required'],
            'message' => ['string','required', 'max:500'],
            'url_current' => ['string','required', 'url:http,https'],
        ]);
        $recaptcha = app('recaptcha');
        if (!$recaptcha->verify($request->input('g-recaptcha-response'))) {
            return back()->withErrors(['captcha' => 'Captcha verification failed.']);
        }
        if ($request->phone !== null) {
            return back()->with('status','Email Not sent.');
        }
        $form_data=[
            'name' =>  $request->name,
            'email' => strtolower($request->email),
            'location' => strtolower($request->location),
            'message' => strtolower($request->message),
            'url_current' => strtolower($request->url_current)
        ];
        $form = Forms::create([
            'type' => 'form--dealerlocator',
            'form_data' => json_encode($form_data)
        ]);

        //$to=['manavsuri@omni-united.com','amit@lopamudracreative.com'];
        $to=['info@radartires.com'];
        try {
            Mail::to($to)->send(new GenricMail($form_data));
            return back()->with('status','Message sent successfully.');
        } catch (\Exception $e) {
            return back()->with('status','Sorry! Please try again later');
        }
        
        //Mail::to($to)->send(new GenricMail($form_data));


        return back()->with('status','Sorry! Please try again later');

    }

    public function form_landing_red(Request $request) {
        $validatedData =$request->validate([
            'g-recaptcha-response' => 'required',
            'name' => ['string','required'],
            'company' => ['string','required'],
            'email' => ['email','required'],
            'company_website' => ['string','required'],
            'phone' => ['string','required'],
            'city' => ['string','required'],
            'message' => ['string','required'],
            'url_current' => ['string','required', 'url:http,https'],
        ]);
        $recaptcha = app('recaptcha');
        if (!$recaptcha->verify($request->input('g-recaptcha-response'))) {
            return back()->withErrors(['captcha' => 'Captcha verification failed.']);
        }
        if ($request->mobile !== null) {
            return back()->with('status','Email Not sent.');
        }
        $form_data=[
            'name' => $request->name,
            'company' => $request->company,
            'email' => $request->email,
            'company_website' => $request->company_website,
            'phone' => $request->phone,
            'city' => $request->city,
            'message' => $request->message,
            'url_current' => $request->url_current,
        ];
        $form = Forms::create([
            'type' => 'landing-form--red',
            'form_data' => json_encode($form_data)
        ]);

        $to=['amit@lopamudracreative.com'];
        //$to=['manavsuri@omni-united.com'];
        //$to=['info@radartires.com'];
        try {
            Mail::to($to)->send(new GenricMail($form_data));
            return back()->with('status','Message sent successfully.');
        } catch (\Exception $e) {
            return back()->with('status','Sorry! Please try again later');
        }
        
        //Mail::to($to)->send(new GenricMail($form_data));


        return back()->with('status','Sorry! Please try again later');

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Forms $forms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Forms $forms)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Forms $forms)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Forms $forms)
    {
        //
    }
}
