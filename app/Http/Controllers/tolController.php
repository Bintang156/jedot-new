<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tolController extends Controller
{
    public function index(){
        return view('template.tol');
    }
}
