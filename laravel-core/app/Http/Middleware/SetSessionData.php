<?php

namespace App\Http\Middleware;

use App\Models\Country;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetSessionData
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //print_r('From SetSessionData middleware.');
        //session()->forget('omni_data');
        
        if(!session()->has('omni_data') || empty(session('omni_data.available_locations')) || empty(session('omni_data.available_locales')) ){
            $omnidata=[
                'available_locations'=>[],
                'available_locales'=>[],
                'preffered_location'=>'',
                'user_location'=>'',
                'default_location'=>'EU',
                'default_locale'=>'eu',
                'region'=>'eu',
                'country'=>'eu',
                'brand'=>'radar',
                'bubble_closed'=>0,
            ];
            $all_countries=Country::all();
            $omnidata['available_locations']=$all_countries->pluck('code','name')->toArray();
            $omnidata['available_locales']=$all_countries->pluck('locale_code','code')->toArray();
            session(['omni_data' => $omnidata]);//Set Session
            session(['locale' => $omnidata['default_locale']]);//Set default locale
            //dd(session('omni_data'));
        }
        return $next($request);
    }
}
