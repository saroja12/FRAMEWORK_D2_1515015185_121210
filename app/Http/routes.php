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


Route::get('mahasiswa','mahasiswaController@awal');
Route::get('mahasiswa/tambah','mahasiswaController@tambah');
Route::get('mahasiswa/{mahasiswa}','mahasiswaController@lihat');
Route::post('mahasiswa/simpan','mahasiswaController@simpan');
Route::get('mahasiswa/edit/{mahasiswa}','mahasiswaController@edit');
Route::post('mahasiswa/edit/{mahasiswa}','mahasiswaController@update');
Route::get('mahasiswa/hapus/{mahasiswa}','mahasiswaController@hapus');

Route::get('dosenn','dosenController@awal');
Route::get('dosenn/tambah', 'dosenController@tambah');
Route::get('dosenn/{dosenn}', 'dosenController@lihat');
Route::post('dosenn/simpan','dosenController@simpan');
Route::get('dosenn/edit/{dosenn}', 'dosenController@edit');
Route::post('dosenn/edit/{dosenn}','dosenController@update');
Route::get('dosenn/hapus/{dosenn}','dosenController@hapus');

Route::get('jadwal_matakuliah','jadwal_matakuliahController@awal');
Route::get('jadwal_matakuliah/tambah','jadwal_matakuliahController@tambah');
Route::get('jadwal_matakuliah/{jadwal_matakuliah}','jadwal_matakuliahController@lihat');
Route::post('jadwal_matakuliah/simpan','jadwal_matakuliahController@simpan');
Route::get('jadwal_matakuliah/edit/{jadwal_matakuliah}','jadwal_matakuliahController@edit');
Route::post('jadwal_matakuliah/edit/{jadwal_matakuliah}','jadwal_matakuliahController@update');
Route::get('jadwal_matakuliah/hapus/{jadwal_matakuliah}','jadwal_matakuliahController@hapus');


Route::get('dosen_matakuliah','dosen_matakuliahController@awal');
Route::get('dosen_matakuliah/tambah','dosen_matakuliahController@tambah');
Route::get('dosen_matakuliah/{dosen_matakuliah}','dosen_matakuliahController@lihat');
Route::post('dosen_matakuliah/simpan','dosen_matakuliahController@simpan');
Route::get('dosen_matakuliah/edit/{dosen_matakuliah}','dosen_matakuliahController@edit');
Route::post('dosen_matakuliah/edit/{dosen_matakuliah}','dosen_matakuliahController@update');
Route::get('dosen_matakuliah/hapus/{dosen_matakuliah}','dosen_matakuliahController@hapus');





Route::get('/', function () {
    return view('welcome');
});

//Route::get('hello-world', function () {
    //return view('Hello-World);
//});