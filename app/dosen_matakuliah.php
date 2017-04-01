<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen_matakuliah extends Model
{
    protected $table = 'dosen_matakuliah';
	protected $fillable = ['dosen_id','matakuliah_id'];

	public function dosen()
	{
		return $this->belongsToMany(dosen::class,'id');
	}
	public function matakuliah_id()
	{
		return $this->hasMany(matakuliah::class);
	}
	public function jadwal_matakuliah()
	{
		return $this->hasMany(jadwal_matakuliah::class);
	}
}
