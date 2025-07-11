<?php

namespace ProductManager\Http\Controllers;

//use \App\Http\Middleware\SetSessionData;
use ProductManager\Models\Brand;
use ProductManager\Models\Country;
use ProductManager\Models\Region;
use ProductManager\Models\SearchTag;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countri=Country::orderBy('order', 'asc')->get();
        return view('ProductManager::admin.country.index')->with('countri',$countri);
    }

    /**
     * Show the form for creating a new resource.
    **/
    public function create()
    {
        $region=Region::all()->pluck('name','id');
        $brand=Brand::all()->pluck('name','id');
        $search_tags_all=SearchTag::all()->pluck('name','id');
        return view('ProductManager::admin.country.create', compact('region','brand','search_tags_all'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'region' => ['required', 'integer'],
            'name' => ['required', 'string', 'max:255'],
            'code' => ['required', 'string', 'max:255'],
            'locale_code' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255', 'unique:'.Country::class],
            'redirect' => ['nullable', 'string', 'max:255'],
            'brand' => ['required', 'array' ],
            'search_tags' => ['required','array'],
            'search_tags.*' => ['string', 'max:255'],
            'order' => ['required'],
        ]);
        $createtyrearray =[
            'region_id' => $request->region,
            'name' => strtolower($request->name),
            'code' => strtolower($request->code),
            'locale_code' => strtolower($request->locale_code),
            'slug' => strtolower($request->slug),
            'redirect' => $request->redirect ?? null,
            'published'=>0,
            'order' => $request->order,
        ];
        if ($request->published) { $createtyrearray['published']=1;}
        $countri = Country::create($createtyrearray);
        $t_brand=[];
        foreach ($request->brand as $key => $value) { 
            $t_brand[$value]=['kram'=>$key];
        }
        $countri->brands()->attach($t_brand);
        
        $b_search_tags=[];
        foreach ($request->search_tags as $key => $value) {
            $b_search_tags[$value]=['kram'=>$key];
        }
        $countri->search_tags()->attach($b_search_tags);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Country $countri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Country $countri)
    {   
        $region=Region::all()->pluck('name','id');
        $brand=Brand::all()->pluck('name','id');
        $search_tags_all=SearchTag::all()->pluck('name','id');
        return view('ProductManager::admin.country.edit', compact('countri','region','brand','search_tags_all'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Country $countri)
    {
        //dd($request);
        $request->validate([
            'region' => ['required', 'integer'],
            'name' => ['required', 'string', 'max:255'],
            'code' => ['required', 'string', 'max:255'],
            'locale_code' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255'],
            'redirect' => ['nullable', 'string', 'max:255'],
            'brand' => ['required', 'array' ],
            'search_tags' => ['required','array'],
            'search_tags.*' => ['string', 'max:255'],
            'order' => ['required'],
        ]);
        $updataarray=[
            'region_id' => $request->region,
            'name' => strtolower($request->name),
            'code' => strtolower($request->code),
            'locale_code' => strtolower($request->locale_code),
            'slug' => strtolower($request->slug),
            'redirect' => strtolower($request->redirect) ?? null,
            'published'=>0,
            'order' => $request->order,
        ];
        if ($request->published) { $updataarray['published']=1;}
        $countri->update($updataarray);
        $t_brand=[];
        foreach ($request->brand as $key => $value) { 
            $t_brand[$value]=['kram'=>$key];
        }
        $countri->brands()->sync($t_brand);

        $b_search_tags=[];
        foreach ($request->search_tags as $key => $value) {
            $b_search_tags[$value]=['kram'=>$key];
        }
        $countri->search_tags()->sync($b_search_tags);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Country $countri)
    {
        if($countri->id){
            // grab session data
            $omnidata=session('omni_data');
            // update session data
            //1. delete country from session data
            unset($omnidata['available_locations'][$countri->name]);
            //2. delete from available locale as well
            unset($omnidata['available_locales'][$countri->code]);
            //3. if it is current locale . set default locale.
            if(session()->has('locale') && session('locale')==$countri->locale_code){
                session(['locale'=>$omnidata['default_locale']]);
            }
            session(['omni_data'=>$omnidata]);
            $countri->delete();
            return redirect()->route('ProductManager::admin.countri.index')->with('status','Country deleted');
        }
    }
}
