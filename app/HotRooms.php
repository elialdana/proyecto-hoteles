<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotRooms extends Model
{
    public function roomType(){
        return $this->belongsTo('App\HotRoomType');
    }

    protected $fillable = ['level','room_number','price','room_type_id'];
}
