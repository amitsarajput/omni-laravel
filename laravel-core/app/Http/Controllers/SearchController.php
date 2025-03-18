<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tyre; // Adjust model as needed
use Illuminate\Support\Str;
use App\Models\Country;

class SearchController extends Controller
{
    //
    public function index(Request $request, $country=null)
    {
        if ($country!==null) {
            $c_id=Country::where('slug', $country)->first();
        }
        $query = $request->input('query');
        $query = strip_tags($query); // Removes HTML tags
        $query = preg_replace('/[^A-Za-z0-9\s]/', '', $query); // Removes special characters
        $tyres=collect([]);
        if (trim($query)==='' || $country===null) {
            return view('search', compact('tyres', 'query'));
        }
        if ($query!=='') {            
            // Search in relevant columns
            $tyres = Tyre::where('country_id', $c_id)
            ->where('publish', 1)
            ->where('name', 'like', "%$query%")
            ->orWhere('description', 'like', "%$query%")
            ->get();
            return view('search', compact('tyres', 'query'));
        }
        else {
            return view('search', compact('tyres', 'query'));
        }
    }
}
