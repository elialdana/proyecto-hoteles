<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HotRoomType;

class RoomTypesController extends Controller
{
    public function getAll(){

        $data = HotRoomType::all();

        return view('roomTypesVw',compact('data'));
    }

    public function create(){
        return view('roomTypesCreateVw');
    }

    public function store(){

        $data = request()->validate([
            'name' => 'required',
            'description' => ''
        ], [
            'name.required' => 'El campo nombre es requerido'
        ]);

        //dd($data);

        HotRoomType::create([
            'name' => $data['name'],
            'description' => $data['description']
        ]);

        return redirect()->route('roomTypesNew');
    }

    public function edit(HotRoomType $hotRoomType){
        return view ('roomTypesEditVw', ['hotRoomType' => $hotRoomType]);
    }

    public function update(HotRoomType $hotRoomType){

        $data = request()->validate([
            'name' => 'required',
            'description' => ''
        ]);

        $hotRoomType->update($data);

        return redirect()->route('roomTypes', ['hotRoomType', $hotRoomType]);
    }

    public function destroy(HotRoomType $hotRoomType){

        $hotRoomType->delete();

        return redirect()->route('roomTypes');
    }

}
