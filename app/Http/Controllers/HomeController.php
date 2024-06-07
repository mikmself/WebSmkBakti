<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('userpage.index');
    }
    public function alurPendaftaran(){
        return view('userpage.alurpendaftaran');
    }
    public function beasiswa(){
        return view('userpage.beasiswa');
    }
}
