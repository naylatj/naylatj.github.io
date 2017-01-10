<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() 
    {
    	$users = ['mama','ayah','saya','kakak','adek'];
    	return view('main/about',['users'=>$users]);
    }
}
