<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\SuratTugasController;
use App\Models\SuratTugas;
use Illuminate\Support\Facades\Http;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
// Route::post('/logout', [Auth\LoginController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/**
 * Pegawai
 */
//index pegawai
Route::get('/pegawai', [App\Http\Controllers\PegawaiController::class, 'index']);
//create pegawai
Route::get('/pegawai/add', [App\Http\Controllers\PegawaiController::class, 'create'])->name('addPegawai');
Route::post('/pegawai/add', [App\Http\Controllers\PegawaiController::class, 'store'])->name('storePegawai');
//delete pegawai
Route::get('/pegawai/delete/{id}', [PegawaiController::class, 'destroy'])->name('deletePegawai');

Route::get('/getdata', [\App\Http\Controllers\PegawaiController::class, 'getdata'])->name('ambildata');


/**
 * Surat Tugas
 */

//tampilan index surat tugas
Route::get('/surat-tugas', [SuratTugasController::class, 'index'])->name('suratIndex');

Route::get('/surat-tugas/get', [SuratTugasController::class, 'getSurat'])->name('getSurat');
//tambah data surat tugas
Route::get('/surat-tugas/add', [App\Http\Controllers\SuratTugasController::class, 'create'])->name('addSuratTugas');
Route::post('/surat-tugas/add', [App\Http\Controllers\SuratTugasController::class, 'store'])->name('storeSuratTugas');
//edit Surat Tugas
Route::get('/surat-tugas/edit/{id}', [App\Http\Controllers\SuratTugasController::class, 'edit']);
Route::post('/surat-tugas/update/{id}', [App\Http\Controllers\SuratTugasController::class, 'update'])->name('updateSurat');
//exportsurat
Route::get('/surat-tugas/export', [App\Http\Controllers\SuratTugasController::class, 'exportSurat'])->name('exportSurat');
// get session untuk surat tugas
Route::post('/getsession', [App\Http\Controllers\SuratTugasController::class, 'getSession'])->name('sesi');
//delete surat tugas
Route::get('/surat-tugas/delete/{id}', [App\Http\Controllers\SuratTugasController::class, 'destroy']);

/**
 *          Sppd 
 */
Route::get('/sppd/add', [App\Http\Controllers\SppdController::class, 'create']);
Route::post('/sppd/add', [App\Http\Controllers\SppdController::class, 'store']);

/**
 *          Laporan Sppd
 */
Route::get('/laporan', [App\Http\Controllers\LaporanSppdController::class, 'create']);
Route::post('/laporan',[App\Http\Controllers\LaporanSppdController::class, 'store']);
//get data st
Route::get('/data-st', [App\Http\Controllers\LaporanSppdController::class, 'getDataSt']);
//get datalaporan
Route::get('/get-laporan', [App\Http\Controllers\LaporanSppdController::class, 'getLaporan']);

/**
 *      SPM
 */
//getspm
Route::get('/getspm',[App\Http\Controllers\SpmController::class, 'getSpm']);
Route::get('/spm/add', [App\Http\Controllers\SpmController::class, 'create']);
Route::post('/spm/add', [\App\Http\Controllers\SpmController::class, 'store']);
Route::get('/spm', [\App\Http\Controllers\SpmController::class, 'index']);