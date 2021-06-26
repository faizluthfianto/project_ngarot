<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// USER
Route::get('/', 'UserController@index');
Route::get('sejarahngarot', 'UserController@viewsejarah');
Route::get('syaratngarot', 'UserController@viewsyarat');
Route::get('jadwalngarot', 'UserController@viewjadwal');
Route::get('daftarngarot', 'UserController@viewdaftar');
Route::get('sejarahdesa', 'UserController@viewsjdesa');
Route::get('alattradisional', 'UserController@viewalat');
Route::get('gadisngarot', 'UserController@viewgadis');
Route::get('bujangngarot', 'UserController@viewbujang');
Route::post('daftarpeserta', 'UserController@daftar_peserta');


// ADMIN
Route::get('login', 'AdminController@login');
Route::post('login', 'AdminController@postlogin');
Route::post('gantipass', 'AdminController@gantipass');
Route::get('logout', 'AdminController@logout');
Route::get('home', 'AdminController@index');
Route::get('sejngarot', 'AdminController@sej_ngarot');
Route::post('sejngarot', 'AdminController@update_ngarot');
Route::get('sejdesa', 'AdminController@sej_desa');
Route::post('sejdesa', 'AdminController@update_ngarot');
Route::get('saratngarot', 'AdminController@sarat_ngarot');
Route::post('saratngarot', 'AdminController@update_ngarot');
Route::get('lapak', 'AdminController@lapak');
Route::post('addlapak', 'AdminController@addlapak');
Route::post('editlapak', 'AdminController@editlapak');
Route::get('hapuslapak/{id}', 'AdminController@hapus_lapak');
Route::get('produk', 'AdminController@produk');
Route::post('addproduk', 'AdminController@add_produk');
Route::post('editproduk', 'AdminController@editproduk');
Route::get('hapusproduk/{id}', 'AdminController@hapus_produk');
Route::get('datapeserta', 'AdminController@peserta');
Route::get('status_acc/{id}', 'AdminController@status_acc');
Route::get('hapususer/{id}', 'AdminController@hapus_user');
Route::get('datapanitia', 'AdminController@panitia');
Route::post('addpanitia', 'AdminController@addpanitia');
Route::post('editpanitia', 'AdminController@editpanitia');
Route::get('hapuspanitia/{id}', 'AdminController@hapus_panitia');


// PESERTA
Route::get('peserta', 'PesertaController@index');
Route::post('editpeserta', 'PesertaController@edit_peserta');

