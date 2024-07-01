<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class AjaxHandlerController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function handle_request(Request $request, string $table){
        //dd($request);
        $metadata=$request->metadata;
        if($metadata['action']==='reorder-tyre'){
            $formdata=$request->formdata;
            foreach($formdata as $key=>$value){
                $record = DB::table($metadata['table'])->where('id', $value)->update([$metadata['column'] => $key]); 
            }
            return response(['success' => 'Updated']);

        }
        elseif($metadata['action']==='reorder-product-images'){
            $record = DB::table($metadata['table'])->where('id', $metadata['id'])->update([$metadata['column'] => json_encode($request->formdata)]);
            return response(['success' => 'Updated']);
        }


    }
}
