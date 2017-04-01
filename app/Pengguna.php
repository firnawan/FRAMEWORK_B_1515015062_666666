<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
	protected $table = 'pengguna';// mendeklarasikan tabel pengguna
	public function dosen(){// fungsi dengan nama dosen
		return $this->hasOne(Dosen::class);// memberikan nilai return dari fungsi hasOne yang merelasikan pengguna dengan dosen dengan foreign key pengguna_id
	}
	public function mahasiswa()// fungsi dengan nama mahasiswa
	{
		return $this->hasOne(Mahasiswa::class);// memberikan nilai return dari fungsi hasOne yang merelasikan pengguna dengan mahasiswa dengan foreign ket pengguna_id
	}
	
	// 	return $this->belongsToMany(Peran::class);
	// }
 
}