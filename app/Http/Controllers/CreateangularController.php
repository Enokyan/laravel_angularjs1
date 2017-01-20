<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateangularController extends Controller
{
    public function index(){
        return view('angular/create');
    }
}
