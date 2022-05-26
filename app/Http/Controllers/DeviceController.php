<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\device;
class DeviceController extends Controller
{
    public function index(){
        $data= device::paginate(7);
        return view('device',compact('data'));
    }
    public function create(){
        return view('add_device');
    }
}
