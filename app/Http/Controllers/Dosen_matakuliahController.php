<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Dosen_matakuliah;

class Dosen_matakuliahController extends Controller
{
     public function awal(){
    	return "Hello dari DosenmatakuliahController";
    }
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan(){
    	$dosen_matakuliah = new Dosen_matakuliah();
    	$dosen_matakuliah->Dosen_id = 1;
    	$dosen_matakuliah->matakuliah_id = 1;
    	$dosen_matakuliah->save();
    	return "Data Dosen Matakuliah dengan Nama {$dosen_matakuliah->dosen_id} telah disimpan";
}
