<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('ruangan','Ruangancontroller@awal');
Route::get('ruangan/tambah','Ruangancontroller@tambah');
Route::get('ruangan/{ruangan}','Ruangancontroller@lihat');
Route::post('ruangan/simpan','Ruangancontroller@simpan');
Route::get('ruangan/edit/{ruangan}','Ruangancontroller@edit');
Route::post('ruangan/edit/{ruangan}','Ruangancontroller@update');
Route::get('ruangan/hapus/{ruangan}','Ruangancontroller@hapus');



Route::get('pengguna','Penggunacontroller@awal');
Route::get('pengguna/tambah','Penggunacontroller@tambah');
Route::get('pengguna/{pengguna}','Penggunacontroller@lihat');
Route::post('pengguna/simpan','Penggunacontroller@simpan');
Route::get('pengguna/edit/{pengguna}','Penggunacontroller@edit');
Route::post('pengguna/edit/{pengguna}','Penggunacontroller@update');
Route::get('pengguna/hapus/{pengguna}','Penggunacontroller@hapus');


Route::get('matakuliah','matakuliahcontroller@awal');
Route::get('matakuliah/tambah','matakuliahcontroller@tambah');
Route::get('matakuliah/{matakuliah}','matakuliahcontroller@lihat');
Route::post('matakuliah/simpan','matakuliahcontroller@simpan');
Route::get('matakuliah/edit/{matakuliah}','matakuliahcontroller@edit');
Route::post('matakuliah/edit/{matakuliah}','matakuliahcontroller@update');
Route::get('matakuliah/hapus/{matakuliah}','matakuliahcontroller@hapus');





Route::get('mahasiswa','mahasiswacontroller@awal');
Route::get('mahasiswa/tambah','mahasiswacontroller@tambah');

Route::get('dosen','dosencontroller@awal');
Route::get('dosen/tambah','dosencontroller@tambah');

Route::get('dosen_matakuliah','dosen_matakuliahcontroller@awal');
Route::get('jadwal_matakuliah','jadwal_matakuliahcontroller@awal');

Route::get('jadwal_matakuliah/tambah','jadwal_matakuliahcontroller@tambah');



Route::get('/', function () {
    return view('welcome');
});

//Route::get('hello-world', function () {
    //return view('Hello-World);
//});