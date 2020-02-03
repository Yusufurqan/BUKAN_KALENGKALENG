<?php 
namespace App\Repository;
use App\kelas;

class KelasRepository{

    public function getAll(){
        return kelas::get();
    }

    public function insert($data){
        $room=new kelas();
        $room->nama=$data['nama'];
        $room->save();
        return $room;
    }
}
