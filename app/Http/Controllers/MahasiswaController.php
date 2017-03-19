<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Mahasiswa;

class MahasiswaController extends Controller
{
     public function awal(){
    	return "Hello dari MahasiswaController";
    }
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan(){
    	$mahasiswa = new Mahasiswa();
    	$mahasiswa->nama = "Firnawan Azhari Hasman";
    	$mahasiswa->nim = "1515015062";
    	$mahasiswa->alamat = "Juanda 1";
    	$mahasiswa->pengguna_id = 3;
    	$mahasiswa->save();
    	return "Data Mahasiswa dengan Nama {$mahasiswa->nama} telah disimpan";
}
