<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mahasiswa;

class mahasiswacontroller extends Controller
{
   public function awal()
   {
	   return "Hello dari Mahasiswacontroller";
   }
   public function tambah()
   {
	   return $this-> simpan();
   }
   public function simpan()
   {
	   $mahasiswa = new mahasiswa();
	   $mahasiswa-> nama = 'Saroja';
	   $mahasiswa-> nim = '1515015185';
	   $mahasiswa-> alamat = 'JL.Gajah Mada Rt.02 No.85';
	   $mahasiswa-> pengguna_id = '1';
	   $mahasiswa->save();
	   return "Data dengan nama {$mahasiswa->nama} telah disimpan";
   }
}
