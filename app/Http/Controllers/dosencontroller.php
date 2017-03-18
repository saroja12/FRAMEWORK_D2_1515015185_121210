<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\dosen;

class dosencontroller extends Controller
{
  public function awal()
  {
	return "Hello dari dosencontroller";
  }
  public function tambah()
  {
	  return $this->simpan();
  }
  public function simpan()
  {
	$dosen = new dosen();
	$dosen->nama = 'Edy budiman';
	$dosen->nip = '124576';
	$dosen->alamat = 'Gelatik';
	$dosen->pengguna_id = '1';
	$dosen->save();
	return "data dengan nama {$dosen->nama} telah disimpan";
  }
}
