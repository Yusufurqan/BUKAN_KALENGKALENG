<?php

namespace App\Imports;

use App\kelas;
// use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;


class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new kelas([
            'nama'=>$row[1],
            // 'kelas_id'=>$row[0]
        ]);
    }
}
