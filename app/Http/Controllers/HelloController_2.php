<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller{
public function index(Request $request)
    {
        $data = [
                'msg'=>'これはBladeを利用するサンプルです。',
                ];
        return view('hello.index',$data);
    }
}
