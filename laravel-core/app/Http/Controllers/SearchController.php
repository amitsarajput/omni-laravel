<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tyre; // Adjust model as needed
use Illuminate\Support\Str;

class SearchController extends Controller
{
    //
    public function index(Request $request)
    {
        $query = $request->input('query');
        $query = strip_tags($query); // Removes HTML tags
        $query = preg_replace('/[^A-Za-z0-9\s]/', '', $query); // Removes special characters
        $tyres=collect([]);
        if (trim($query)==='') {
            return view('search', compact('tyres', 'query'));
        }
        if ($query=='') {            
            // Search in relevant columns
            $tyres = Tyre::where('name', 'like', "%$query%")
            ->orWhere('description', 'like', "%$query%")
            ->get();

            return view('search', compact('tyres', 'query'));
        }
    }
}
