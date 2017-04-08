<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    protected $table = 'dosen';
	protected $guarded =['id'];

    public function pengguna()
    {
    	return $this->belongsTo(pengguna::class,'id');
    }
    public function dosen_matakuliah()
    {
    	return $this->hasMany(dosen_matakuliah::class,'dosen_id');
    }
    {
      $out = [];
      foreach ($this->all() as $dsn) {
         $out[$dsn->id] = "{$dsn->Nama} ({$dsn->NIP})";
      }
      return $out;
   }
}
