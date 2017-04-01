<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    protected $table ='pengguna';
	protected $fillable = ['username','password']; 

	 protected $table = 'pengguna'
    public function Dosen()
    {
    	return $this->hasOne(dosen::class,'pengguna_id');
    }
    public function Mahasiswa()
    {
    	return $this->hasOne(mahasiswa::class,'pengguna_id');
    }
    public function peran()
    {
    	return $this->belongsToMany(peran::class,'pengguna_id');
    }
}
