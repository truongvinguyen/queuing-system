<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class accountController extends Controller
{
   public function index(){
       return view('account');
   }
   public function create(){
       return view('add_account');
   }
   public function edit(){
    return view('edit_account');
   }
   public function note(){
    return view('note');
   }
}
