<?php

namespace App\Http\Controllers;

use App\Models\Forms;
use Illuminate\Http\Request;

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
            $this->validate($request, [
                'location' => 'required'
            ]);
            $omni_data=session('omni_data');
            //dd($omni_data);
            $new_loc=$request->location;
            $to_url='radar';
            if (in_array($new_loc, $omni_data['available_locations'])) { //If avialable
                $to_url.='-';
                $to_url.=$new_loc;
                
                //Set Session Data
                $omni_data['preffered_location']=$new_loc;
                $omni_data['country']=$new_loc;
                //Set language
                $locale=$omni_data['available_locales'][$new_loc];
            }else{ // Not available
                $to_url.='-';
                $to_url.=$omni_data['default_location'];
                
                //Set language
                $locale=$omni_data['default_locale'];
            }
            //Set language
            session(['locale' => $locale]);
            session(['omni_data' => $omni_data]);
            $to_url=strtolower($to_url);
            return redirect($to_url);
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
