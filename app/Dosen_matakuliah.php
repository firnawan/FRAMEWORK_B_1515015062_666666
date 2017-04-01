<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen_matakuliah extends Model
{
	public function dosen(){// sebuah fungsi dosen
    	return $this->belongsTo(Dosen::class);//memberikan nilai return dari fungsi belongsTo yang  merelasikan model dosen dengan model dosen_matakuliah
    }
    public function matakuliah(){//fungsi matakuliah
    	return $this->belongsTo(MataKuliah::class);// memberikan nilai return dari fungsi belongsTo yang merelasikan banyak model dosen_matakuliah dengan model matakuliah
    }
    public function Jadwal_matakuliah(){//fungsi jadwal_matakuliah
    	return $this->hasMany(JadwalMataKuliah::class); //memberikan nilai return dari fungsi hasMany yang merelasikan model dosen_matakuliah dengan banyak model jadwal_matakuliah dengan foreign key dosen_matakuliah_id
    }
    protected $table = 'dosen_matakuliah';//mendefinisikan nama tabel dosen_matakuliah
    // protected $fillable=['dosen_id','matakuiah_id'];
    protected $fillable = ['dosen_id','matakuliah_id'];
}

