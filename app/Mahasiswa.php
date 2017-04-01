<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
	protected $table = 'mahasiswa';// mendeklarasikan tabel mahasiswa
    // protected $fillable=['nama','nim','alamat','pengguna_id'];
	public function Pengguna()// fungsi dengan nama pengguna
	{
		return $this->belongsTo(Pengguna::class);// memberikan nilai return dari fungsi belongsTo yang merelasikan mahasiswa dengan pengguna
	}
    public function Jadwal_MataKuliah(){ // fungsi dengan nama jadwal_matakuliah
    	return $this->hasMany(JadwalMataKuliah::class);// memberika nilai return dari fungsi hasMany yang merelasikan mahasiswa dengan banyak jadwal_matakuliah dengan foreign key mahasiswa_id
    }
    // protected $fillable = ['nama','nim','alamat','pengguna_id'];
}

