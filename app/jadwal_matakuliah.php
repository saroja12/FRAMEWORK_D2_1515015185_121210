<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal_matakuliah extends Model
{
  protected $table = 'jadwal_matakuliah';
  protected $fillable = ['mahasiswa_id','ruangan_id','dosen_matakuliah_id'];

  public function mahasiswa()
	{
		return $this->belongsToMany(mahasiswa::class);
	}
	public function ruangan()
	{
		return $this->belongToMany(ruangan::class);
	}
	public function dosen_matakuliah()
	{
		return $this->belongToMany(dosen_matakuliah::class);
	}
}
