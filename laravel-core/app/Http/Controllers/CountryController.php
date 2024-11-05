<?php

namespace App\Http\Controllers;

//use \App\Http\Middleware\SetSessionData;
use App\Models\Brand;
use App\Models\Country;
use App\Models\Region;
use App\Models\SearchTag;
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
        //
        $country=Country::all();
        return view('admin.country.index')->with('country',$country);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $region=Region::all()->pluck('name','id');
        $brand=Brand::all()->pluck('name','id');
        $search_tags_all=SearchTag::all()->pluck('name','id');
        return view('admin.country.create', compact('region','brand','search_tags_all'));
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
            'brand' => ['required', 'array' ],
            'search_tags' => ['required','array'],
            'search_tags.*' => ['string', 'max:255'],
        ]);

        $region = Country::create([
            'region_id' => $request->region,
            'name' => strtolower($request->name),
            'code' => strtoupper($request->code),
            'locale_code' => $request->locale_code,
            'slug' => strtolower($request->slug)
        ]);
        $t_brand=[];
        foreach ($request->brand as $key => $value) { 
            $t_brand[$value]=['kram'=>$key];
        }
        $country->brands()->attach($t_brand);
        
        $b_search_tags=[];
        foreach ($request->search_tags as $key => $value) {
            $b_search_tags[$value]=['kram'=>$key];
        }
        $country->search_tags()->attach($b_search_tags);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Country $country)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Country $country)
    {   
        $region=Region::all()->pluck('name','id');
        $brand=Brand::all()->pluck('name','id');
        $search_tags_all=SearchTag::all()->pluck('name','id');
        return view('admin.country.edit', compact('country','region','brand','search_tags_all'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Country $country)
    {
        //
        $request->validate([
            'region' => ['required', 'integer'],
            'name' => ['required', 'string', 'max:255'],
            'code' => ['required', 'string', 'max:255'],
            'locale_code' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255'],
            'brand' => ['required', 'array' ],
            'search_tags' => ['required','array'],
            'search_tags.*' => ['string', 'max:255'],
        ]);

        $country->update([
            'region_id' => $request->region,
            'name' => strtolower($request->name),
            'code' => strtoupper($request->code),
            'locale_code' => $request->locale_code,
            'slug' => strtolower($request->slug),
        ]);
        $t_brand=[];
        foreach ($request->brand as $key => $value) { 
            $t_brand[$value]=['kram'=>$key];
        }
        $country->brands()->sync($t_brand);

        $b_search_tags=[];
        foreach ($request->search_tags as $key => $value) {
            $b_search_tags[$value]=['kram'=>$key];
        }
        $country->search_tags()->sync($b_search_tags);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Country $country)
    {
        if($country->id){
            // grab session data
            $omnidata=session('omni_data');
            // update session data
            //1. delete country from session data
            unset($omnidata['available_locations'][$country->name]);
            //2. delete from available locale as well
            unset($omnidata['available_locales'][$country->code]);
            //3. if it is current locale . set default locale.
            if(session()->has('locale') && session('locale')==$country->locale_code){
                session(['locale'=>$omnidata['default_locale']]);
            }
            session(['omni_data'=>$omnidata]);
            $country->delete();
            return redirect()->route('admin.country.index')->with('status','Country deleted');
        }
    }
}
