<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KaprodiController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KelasController;

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




Route::get('/', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('kaprodi/data', [KaprodiController::class, 'index']);
Route::get('mahasiswa/dash', [MahasiswaController::class, 'login']);
Route::get('dosen/data', [DosenController::class, 'index']);


Route::get('/wrong', function () {
    return view('wrong'); });

Route::get('dosen/kelas_si', function () {
    return view('dosen/kelas_si'); });

Route::get('dosen/kelas_ti', function () {
    return view('dosen/kelas_ti'); });


Route::get('/kelas', [KelasController::class, 'kelas'])->name('kelas.index');
Route::get('kelas/edit/{id}', [KelasController::class, 'edit'])->name('kelas.edit');
Route::put('kelas/{id}', [KelasController::class, 'update'])->name('kelas.update');
Route::get('kelas/create', [KelasController::class, 'create'])->name('kelas.create');
Route::post('kelas/store', [KelasController::class, 'store'])->name('kelas.store');
Route::delete('/kelas/{id}', [KelasController::class, 'destroy'])->name('kelas.destroy');


Route::get('/dosen', [DosenController::class, 'dosen'])->name('dosen.index');
Route::get('dosen/edit/{id}', [DosenController::class, 'edit'])->name('dosens.edit');
Route::put('dosen/{id}', [DosenController::class, 'update'])->name('dosen.update');
Route::get('dosen/create', [DosenController::class, 'create'])->name('dosen.create');
Route::post('dosen/store', [DosenController::class, 'store'])->name('dosen.store');
Route::get('/dosen/kelas1', [DosenController::class, 'showKelasSI'])->name('mahasiswa.showKelasSI');
Route::get('/dosen/kelas2', [DosenController::class, 'showKelasTI'])->name('mahasiswa.showKelasTI');
Route::get('/dosen/list_req', [DosenController::class, 'listRequests'])->name('dosen.list_req');
Route::post('/dosen/approve-request/{id}', [DosenController::class, 'approveRequest'])->name('dosen.approveRequest');
Route::post('/dosen/reject-request/{id}', [DosenController::class, 'rejectRequest'])->name('dosen.rejectRequest');
Route::delete('/dosen/{id}', [DosenController::class, 'destroy'])->name('dosen.destroy');
Route::post('/kelas/dosen/{id}', [DosenController::class, 'showKelas'])->name('kelas.dosen');


Route::get('/mahasiswa/kelas1', [MahasiswaController::class, 'showKelasSI'])->name('mahasiswa.showKelasSI');
Route::get('/mahasiswa/kelas2', [MahasiswaController::class, 'showKelasTI'])->name('mahasiswa.showKelasTI');
Route::get('mahasiswa/edit/{id}', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
Route::put('mahasiswa/{id}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
Route::get('mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
Route::post('mahasiswa/store', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
Route::post('/mahasiswa/go-back', [MahasiswaController::class, 'goBack'])->name('mahasiswa.goBack');
Route::get('/mahasiswa/profile', [MahasiswaController::class, 'show']);
Route::post('/mahasiswa/request-edit', [MahasiswaController::class, 'requestEdit'])->name('mahasiswa.requestEdit');
Route::post('/mahasiswa/approve-edit', [MahasiswaController::class, 'approveEdit'])->name('mahasiswa.approveEdit');
Route::post('/mahasiswa/reject-edit', [MahasiswaController::class, 'rejectEdit'])->name('mahasiswa.rejectEdit');
Route::get('editMhs/{id}', [MahasiswaController::class, 'editMhs'])->name('mahasiswa.req_edit');
Route::put('mahasiswa/updateMhs/{id}', [MahasiswaController::class, 'updateMhs'])->name('mahasiswa.updateMhs');
Route::resource('mahasiswa', MahasiswaController::class);
Route::delete('/mahasiswa/{id}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');
Route::get('/profile', [MahasiswaController::class, 'show'])->name('mahasiswa.profile');
Route::get('mahasiswa/data', [MahasiswaController::class, 'back'])->name('dosen.data');
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');

