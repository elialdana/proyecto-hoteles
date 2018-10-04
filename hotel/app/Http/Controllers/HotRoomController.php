<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HotRooms;
use App\HotRoomType;

class HotRoomController extends Controller
{
    public function getAll(){

        $data = HotRooms::with('roomType')->get();
        
        return view('roomVw', compact('data'));
        
    }

    public function create(){

        $data = HotRoomType::all();

        return view('roomCreateVw',compact('data'));
    }

    public function store(){

        $data = request()->validate([
            'level' => 'required',
            'room_number' => 'required',
            'price' => 'required'
        ], [
            'nivel.required' => 'El campo Nivel es requerido',
            'room_number.required' => 'El campo No. Habitación es requerido',
            'price.required' => 'El campo Precio es requerido'
        ]);

        //dd($data);

        HotRoomType::create([
            'level' => $data['level'],
            'room_number' => $data['room_number'],
            'price' => $data['price']
        ]);

        return redirect()->route('roomsNew');
    }    
    
}
