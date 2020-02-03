<?php

namespace App\Http\Controllers;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;

class ImportController extends Controller
{
    public function importkelas(Request $request)
    {
        // $rows = Excel::toArray(new UsersImport, $request->file('import_file'));
        $array= Excel::import(new UsersImport, $request->file('import_file'));
        // foreach($rows as $key =>$item){
        //     echo $item['kelas'].'     '.$item['kelas_id'];
        // }
        // print_r($rows[0][0]);
        // print_r($array);
        return redirect('/kelas');

    }
}
