<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Open as Op;

class Open extends Controller
{
    public function create(){
        return view('open.create');
    }
    public function store(Request $request){
        // $data=request()->except('_token');
        // $res=Op::create([
        //     'c_name'=>$data['c_name'],
        //     'c_legal'=>$data['c_legal'],
        //     'c_site'=>$data['c_site'],
        //     'c_business'=>$data['c_business'],
        //     'c_phone'=>$data['c_phone'],
        //     'c_email'=>$data['c_email'],
        // ]);
        // echo "<re>";print_r($request->input());echo "<pre>";

        $open_data=[
            'c_name'=>$request->input('c_name'),
            'c_legal'=>$request->input('c_legal'),
            'c_site'=>$request->input('c_site'),
            'c_business'=>$request->input('c_business'),
            'c_phone'=>$request->input('c_phone'),
            'c_email'=>$request->input('c_email'),
        ];
        $oid = Op::insertGetId($open_data);
        if($oid > 0){
            echo "注册成功";
        }else{
            echo "注册失败";
        }
    }
}
