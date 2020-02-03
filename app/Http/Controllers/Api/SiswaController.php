<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\siswa;
use Illuminate\Support\Facades\Validator;


class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = siswa::with('kelas')->get();;
        return response()->json($siswa);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'nis' => 'required',
            'nama' => 'required',
            'kelas_id' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'nama_wali' => 'required',
            'HP_wali' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'data' => $validator->messages()
            ]);
        }

        $siswa = new siswa();
        $siswa->nis = $request->get('nis');
        $siswa->nama = $request->get('nama');
        $siswa->kelas_id = $request->get('kelas_id');
        $siswa->HP_siswa = $request->get('HP_siswa');
        $siswa->jenis_kelamin = $request->get('jenis_kelamin');
        $siswa->alamat = $request->get('alamat');
        $siswa->nama_wali = $request->get('nama_wali');
        $siswa->HP_wali = $request->get('HP_wali');
        $siswa->save();
        return response()->json([
            'status' => true,
            'data' => $siswa
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($kelasID)
    {
        $siswa = siswa::with('kelas')->get();

        $names = $siswa->reject(function ($user) use ($kelasID){
             return $user->kelas_id == $kelasID;
        })
            ->map(function ($user) {
                return $user->nama;
            });
        return response()->json($names);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
