<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Pengguna;

class Penggunacontroller extends Controller
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
		$pengguna = new Pengguna();
		$pengguna->username = 'saroja';
		$pengguna->password = 'minion';
		$pengguna->save();
		return "Data dengan username {$pengguna->username}telah disimpan";
	}
	
}