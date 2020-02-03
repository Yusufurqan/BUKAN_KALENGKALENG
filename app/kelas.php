<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\Variable;

class kelas extends Model
{
    protected $table = 'kelas';
    public $timestamps = false;
    protected $fillable=['nama'];
    // protected $primaryKey = "id_kelas";
    // public $incrementing = true;
    
    public function siswa()
    {
        return $this->hasMany(siswa::class,'kelas_id','id');
    }
}
