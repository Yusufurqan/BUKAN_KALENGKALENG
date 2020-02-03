<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    protected $table = 'siswa';
    // protected $primaryKey = "id_siswa";
    // public $incrementing = true;
    

    public function kelas()
    {
        return $this->belongsTo(kelas::class,'kelas_id');
    }
}
