<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HotRoomServices;

class RoomServicesController extends Controller
{
    public function getAll(){

        $data = HotRoomServices::all();

        return view('roomServicesVw',compact('data'));
    }

    public function create(){
        return view('roomServicesCreateVw');
    }

    public function store(){

        $data = request()->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => ''
        ], [
            'name.required' => 'El campo nombre es requerido',
            'price.required' => 'El campo precio es requerido'
        ]);

        //dd($data);

        HotRoomServices::create([
            'name' => $data['name'],
            'price' => $data['price'],
            'description' => $data['description']
        ]);

        return redirect()->route('roomServicesNew');
    }

    public function edit(HotRoomServices $hotRoomServices){
        return view ('roomServicesEditVw', ['hotRoomServices' => $hotRoomServices]);
    }

    public function update(HotRoomServices $hotRoomServices){

        $data = request()->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => ''
        ]);

        $hotRoomServices->update($data);

        return redirect()->route('roomServices', ['hotRoomServices', $hotRoomServices]);
    }

    public function destroy(HotRoomServices $hotRoomServices){

        $hotRoomServices->delete();

        return redirect()->route('roomServices');
    }

}
