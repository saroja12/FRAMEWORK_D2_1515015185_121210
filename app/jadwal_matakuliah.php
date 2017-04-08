<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal_matakuliah extends Model
{
  protected $table = 'jadwal_matakuliah';
  protected $guarded = ['id'];

  public function mahasiswa()
	{
		return $this->belongsTo(mahasiswa::class,'mahasiswa_id');
	}
	public function ruangan()
	{
		return $this->belongsTo(ruangan::class,'Ruangan_id');
	}
	public function dosen_matakuliah()
	{
		return $this->belongsToMany(dosen_matakuliah::class,'dosen_matakuliah_id');
	}
}
