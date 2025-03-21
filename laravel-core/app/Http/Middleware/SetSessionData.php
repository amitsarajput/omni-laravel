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
        //session()->forget(['omni_data','locale']);
        if(!session()->has('omni_data') || 
        empty(session('omni_data')) || 
        empty(session('omni_data.available_locations')) || 
        empty(session('omni_data.available_locales')) ){ 
            //
            //This function is runing on every request session is getting away after every request life cycle. Need to fix it.--fixed by putting start session midleware before the setsessiondata middleware in kernel.php file.
            //print_r('here');
            $omnidata=[
                'available_locations'=>[],
                'available_locales'=>[],
                'preffered_location'=>'',
                'user_location'=>'',
                'default_location'=>'EU',
                'default_locale'=>'en',
                'region'=>'eu',
                'country'=>'eu',
                'brand'=>'radar',
                'bubble_closed'=>0,
                'dealerform_open'=>0,
            ];
            try{
                $all_countries=Country::where('published',1)->orderBy('order', 'asc')->get();
            }catch(\Exception $e){
                return response('Error on the server. Please check after refreshing the page.');
            }
            $omnidata['available_locations']=$all_countries->pluck('code','name')->toArray();
            $omnidata['available_locales']=$all_countries->pluck('locale_code','code')->toArray();
            $omnidata['slugs']=$all_countries->pluck('slug','code')->toArray();
            session(['omni_data' => $omnidata]);//Set Session
            session(['locale' => $omnidata['default_locale']]);//Set default locale
            
        }
        //dd(session('omni_data'));
        return $next($request);
    }
}
