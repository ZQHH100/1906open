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
        echo '1';
    }
}
