<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PageController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function roomTypes(){
       
        $data = App\HotRoomType::all();

        return view('roomTypesVw',compact('data'));        
    }
}
