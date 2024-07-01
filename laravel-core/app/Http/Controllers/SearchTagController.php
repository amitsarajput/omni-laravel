<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Icon;
use App\Models\SearchTag;
use Illuminate\Http\Request;

class SearchTagController extends Controller
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
        $searchtag=SearchTag::with('brands')->get();
        
        return view('admin.searchtag.index', compact('searchtag'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        $brand=Brand::all()->pluck('name','id')->map(function (string $item, string $key) {
            return ucfirst($item);
        });
        $icon=Icon::all()->pluck('name','id')->map(function (string $item, string $key) {
            return strtoupper($item);
        });
        //dd($brand);
        return view('admin.searchtag.create', compact(['brand','icon']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'brand' => ['required', 'array' ],
            'icon' => ['required', 'integer' ],
            'name' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255', 'unique:'.SearchTag::class]
        ]);

        $searchtag = SearchTag::create([
            'name' => strtoupper($request->name),
            'icon_id' => $request->icon,
            'slug' => strtolower($request->slug),
        ]);
        //$searchta=SearchTag::find($searchtag);
        $searchtag->brands()->attach($request->brand);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(SearchTag $searchTag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SearchTag $searchtag)
    {   
        

        $brand=Brand::all()->pluck('name','id')->map(function (string $item, string $key) {
            return ucfirst($item);
        });
        $icon=Icon::all()->pluck('name','id')->map(function (string $item, string $key) {
            return strtoupper($item);
        });
        return view('admin.searchtag.edit', compact('brand','icon','searchtag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SearchTag $searchtag)
    {
        //
        $request->validate([
            'brand' => ['required', 'array' ],
            'icon' => ['required', 'integer' ],
            'name' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255']
        ]);

        $searchtag ->update([
            'name' => $request->name,
            'icon' => $request->icon,
            'slug' => strtolower($request->slug),
        ]);
        //$searchta=SearchTag::find($searchtag);
        $searchtag->brands()->sync($request->brand);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SearchTag $searchtag)
    {
        if($searchtag->id){
            $searchtag->brands()->detach();
            $searchtag->delete();
            return redirect()->route('admin.searchtag.index')->with('status','SearchTag deleted');
        }
    }
}
