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
        if ($request_path==='about-us') {
            $this->data['page']=$request_path;
        }
        if ($request_path==='why-radar') {
            $this->data['page']=$request_path;
        }
        if ($request_path==='contact') {
            $this->data['page']=$request_path;
        }
        if ($request_path === 'radar-us/limited-warranty') {
            $this->data['page'] = 'warranty-radarus';
        }
        if (View::exists('pages/'.$this->data['page'])) {
            return view('pages/' . $this->data['page'], ['data'=>$this->data]);
        }else {
            abort(404);
        }
    }
}
