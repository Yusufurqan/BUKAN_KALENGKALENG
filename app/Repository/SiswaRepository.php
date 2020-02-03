<?php
namespace App\Repository;

use App\Siswa;

class SiswaRepository{

    public function getAll()
    {
        return Siswa::paginate(3);
    }

    public function insert($data)
    {
        $siswa = new Siswa();
        $siswa->nis=$data['nis'];        
        $siswa->name = $data['name'];
        $siswa->RFID = $data['RFID'];
        $siswa->kelas_id = $data['kelas'];
        $siswa->jenis_kelamin = $data['jenis_kelamin'];
        $siswa->alamat = $data['alamat'];
        $siswa->HP_siswa = $data['HP_siswa'];
        $siswa->nama_wali = $data['nama_wali'];
        $siswa->HP_wali = $data['HP_wali'];        
        $siswa->save();
        return $siswa;
    }
    
    public function show($id)
    {
        $siswa = Siswa::with('kelas')->findOrFail($id);

        return $siswa;
    }

    public function update($data,$id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->nis=$data['nis'];        
        $siswa->nama = $data['nama'];
        $siswa->RFID = $data['RFID'];
        $siswa->kelas_id = $data['kelas'];
        $siswa->jenis_kelamin = $data['jenis_kelamin'];
        $siswa->alamat = $data['alamat'];
        $siswa->HP_siswa = $data['HP_siswa'];
        $siswa->nama_wali = $data['nama_wali'];
        $siswa->HP_wali = $data['HP_wali'];    
        $siswa->save();
        return $siswa;
    }

    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();
        return $siswa;
    }
}