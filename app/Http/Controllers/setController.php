<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class setController extends Controller
{
    public function index()
    {
        return view('set.index');
    }
    public  function create()
    {
        return view('set.create');
    }
    public  function edit($id)
    {
        return view('set.edit');
    }
    public  function show($id)
    {
        if($id == 3){
            $set_name="平價作業機";
            $set_mouse="a牌";
            $set_keyboard="a牌";
            $set_Screen="b牌";
        }else{
            $set_name="0";
            $set_mouse="0";
            $set_keyboard="0";
            $set_Screen="No";
        }
        return view('set.show')->with(["name"=>$set_name,"mouse"=>$set_mouse,"keyboard"=>$set_keyboard,"Screen"=>$set_Screen]);
    }
}
