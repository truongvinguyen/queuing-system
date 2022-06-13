<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\service;
use App\models\number;
use Illuminate\Support\Facades\DB;
class NumberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $data=number::paginate(8);
        $service=service::all();
        return view('/number',compact('data','service'));
    }
    public function create(){
        $service = service::all();
        return view('/add_number',compact('service'));
    }
    public function save(Request $request,$number_name,$number_service){
    //     number::create([
    //         'number' => 20100,
    //         'number_name'=> ,
    //         'number_service'=>$number_service,
    //         'number_status'=>1,
    //         'number_source'=>"kosk1", 
    //         'created_at'=>date("H:i Y-m-d"),
    //         'updated_at'=>,      
    // ]);
    $data= array();
    $data['number'] = 20100;
    $data['number_name'] =$number_name;
    $data['number_service'] =$number_service;
    $data['number_status'] =1;
    $data['number_source'] ="kosk1";
    $data['created_at'] =date("Y-m-d H:i");
    $data['updated_at'] =date("Y-m-d H:i",strtotime('+1 week'));
    $id = DB::table('number')->insertGetId($data);
    $numberNow =DB::table('number')->where('id', $id)->first();
   
        return view('modal',compact('numberNow'));
    }
    public function fill_name($name){
        $fill_name= (str_replace("-"," ",$name));
        $data=number::where('number_service', $fill_name)->paginate(8);
        $service=service::all();
        return view('/number',compact('data','service'));
    }
    public function fill_dangcho(){
        $data=number::where('number_status', 1)->paginate(8);
        $service=service::all();
        return view('/number',compact('data','service'));
    }
    public function fill_done(){
        $data=number::where('number_status', 2)->paginate(8);
        $service=service::all();
        return view('/number',compact('data','service'));
    }
    public function fill_huy(){
        $data=number::where('number_status', 3)->paginate(8);
        $service=service::all();
        return view('/number',compact('data','service'));
    }
    public function report(){
        $data=number::paginate(8);
        $service=service::all();
        return view('/report',compact('data','service'));
    }
}
