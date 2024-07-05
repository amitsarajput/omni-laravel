<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class StaticPagesController extends Controller
{
    private $data=[];
    public function index(Request $request,  ?string $country=null){
        print_r('StaticPagesController');
        //$request->fullUrl(); $request->path(); $request->root();
        if($country!==null){
            $segments=explode('/',$request->path());
            array_shift($segments);
            $request_path=implode('/',$segments);
        }else{
            $request_path=$request->path();
        }
        
        //dd($country,$request_path);
        $this->data=[];
        if ($request_path==='who-we-are') {
            $this->data['page']=$request_path;
        }
        if ($request_path === 'radar-us/limited-warranty') {
            $this->data['page'] = 'warranty-radarus';
        }
        return view('pages/' . $this->data['page'], ['data'=>$this->data]);
    }
}
