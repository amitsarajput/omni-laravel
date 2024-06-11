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
        //session()->forget('omni_data');
        if(!session()->has('omni_data') || session('omni_data.available_locations')==null){
            $omnidata=[
                'available_locations'=>[],
                'preffered_location'=>'',
                'user_location'=>'',
                'default_location'=>'EU',
                'region'=>'eu',
                'country'=>'eu',
                'brand'=>'radar',
                'bubble_closed'=>0,
            ];
            $omnidata['available_locations']=Country::all()->pluck('code','name')->toArray();
            session(['omni_data' => $omnidata]);//Set Session
        }
        return $next($request);
    }
}
