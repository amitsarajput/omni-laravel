<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class StaticPagesController extends Controller
{
    private $data=[];
    public function index(Request $request){
        //$request->fullUrl(); $request->path(); $request->root();
        $this->data=[];
        //dd($request->path());
        if ($request->path()==='who-we-are') {
            $this->data['page']=$request->path();
        }
        if ($request->path() === 'radar-us/limited-warranty') {
            $this->data['page'] = 'warranty-radarus';
        }
        return view('pages/' . $this->data['page'], ['data'=>$this->data]);
    }
}
