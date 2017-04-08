<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen_matakuliah extends Model
{
    protected $table = 'dosen_matakuliah';
	protected $guarded = ['id'];

	public function dosen()
	{
		return $this->belongsTo(dosen::class,'dosen_id');
	}
	public function matakuliah_id()
	{
		return $this->hasMany(matakuliah::class,'matakuliah_id');
	}
	public function jadwal_matakuliah()
	{
		return $this->hasMany(jadwal_matakuliah::class);
	}
	public function ListDosenDanMatakuliah($value='')
	{
			$out = [];
			foreach ($this->all() as $dsnMtk) {
				$out[$dsnMtk->id] = "{$dsnMtk->dosen->nama} (matakuliah{dsnMtk->matakuliah->title})";
			}
			return $out;
		}
}
