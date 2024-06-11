<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Region;
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
        return view('admin.country.create', compact('region'));
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
            'slug' => ['required', 'string', 'max:255', 'unique:'.Country::class]
        ]);

        $region = Country::create([
            'region_id' => $request->region,
            'name' => strtolower($request->name),
            'code' => strtoupper($request->code),
            'slug' => strtolower($request->slug),
        ]);
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
        return view('admin.country.edit', compact('country','region'));
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
            'slug' => ['required', 'string', 'max:255']
        ]);

        $country->update([
            'region_id' => $request->region,
            'name' => strtolower($request->name),
            'code' => strtoupper($request->code),
            'slug' => strtolower($request->slug),
        ]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Country $country)
    {
        if($country->id){
            $country->delete();
            return redirect()->route('admin.country.index')->with('status','Country deleted');
        }
    }
}
