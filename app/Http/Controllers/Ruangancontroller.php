<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Ruangan;

class Ruangancontroller extends Controller
{
    public function awal()
	{
		return "Hello dari oja";
	}
	public function tambah()
	{
		return $this ->simpan();
	}
	public function simpan()
	{
		$ruangan = new Ruangan();
		$ruangan->title = 'saroja';
		$ruangan->save();
		return "Data dengan {$ruangan->title}telah disimpan";
	}
}
