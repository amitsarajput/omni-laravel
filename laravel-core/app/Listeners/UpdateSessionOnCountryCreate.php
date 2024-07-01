<?php

namespace App\Listeners;

use App\Events\eloquent.created:Country;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UpdateSessionOnCountryCreate
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(eloquent.created:Country $event): void
    {
        // grab session data
        $omnidata=session('omni_data');
        // update session data
        //1. delete country from session data
        unset(($omnidata['available_locations'][$country->name]);
        //2. delete from available locale as well
        unset(($omnidata['available_locales'][$country->code]);
        //3. if it is current locale . set default locale.
        if(session()->has('locale') && session('locale')==$country->locale_code){
            session(['locale'=>$omnidata['default_locale']]);
        }
    }
}
