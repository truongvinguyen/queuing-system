<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        return view('role');
    }
    public function create(){
        return view('add_role');
    }
    public function save( Request $request){
        dd( $request->role_id_detail);
    }
    public function edit(){
        return view('edit_role');
    }
}
