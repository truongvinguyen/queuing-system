<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumberController extends Controller
{
    public function index(){
        return view('/number');
    }
    public function create(){
        return view('/add_number');
    }
}
