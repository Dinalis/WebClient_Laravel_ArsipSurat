<?php

use Illuminate\Support\Facades\Route;

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
// Route::get('/surat/tambahSurat', 'SuratController@tambahSurat');

// Route::post('/surat/simpanSurat', 'SuratController@simpanSurat');



// Route::get('/surat/edit/{surat}', 'SuratController@edit');
Route::get('/', 'HomeController@index');
Route::get('/surat', 'SuratController@index');
Route::get('/userDeleteSurat/{id}', 'SuratController@userDeleteSurat');
Route::get('/detailSurat/{id}', 'SuratController@detailSurat');
Route::get('/surat/hapusSurat/{id}', 'SuratController@detailSurat');

Route::get('/surat/hapusSurat/{nomor_instansi}', 'SuratController@hapus');

Auth::routes();
Route::get('/home', 'SuratController@index')->name('home');
Route::resource('/admin/users', 'Admin\UsersController', ['except' => ['show', 'create', 'store']]);
Route::get('/', function () {
    return view('welcome');
});
