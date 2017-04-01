<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
 	public function dosen_matakuliah(){// fungsi dengan nama dosen_matakuliah
    	return $this->hasMany(DosenMataKuliah::class);// memberikan nillai return dari fungsi hasMany yang merelasikan matakuliah dengan banyak dosen_matakuliah dengan foreign key matakuliah_id
    }

    protected $table = 'matakuliah';// mendeklarasikan tabel matakuliah
    // protected $fillable=['title','keterangan'];

    // protected $fillable = ['title','keterangan'];
}

