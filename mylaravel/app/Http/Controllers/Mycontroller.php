<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mycontroller extends Controller
{
    //
    function index($user=""){
        $data['name'] = "Jirayus";
        $data['user'] = $user;
        return view('myview', $data);
    }

    function process(Request $req){
        $input1 = $req->input('test');
        echo $input1;
    }
}
