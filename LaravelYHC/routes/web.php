<?php

use App\Models\Prodi;
use App\Models\Tahun;
use App\Models\Semester;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\TahunController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\MahasiswaController;
use App\Models\Kelas;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/mahasiswa', [HomeController::class, 'index']);
Route::get('/mahasiswa/{mahasiswa:id}', [HomeController::class, 'show']);
Route::get('/prodi', function(){return view('prodi', ['prodi' => Prodi::all()]);});
Route::get('/semester', function(){return view('semester', ['semester' => Semester::all()]);});
Route::get('/kelas', function(){return view('kelas', ['kelas' => Kelas::all()]);});
Route::get('/tahun', function(){return view('tahun', ['tahun' => Tahun::all()]);});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'createUser']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');
// Route::get('dashboard', [DashboardController::class, 'index'])->middleware('auth');


Route::resource('/dashboard/users', UserController::class)->middleware('auth');
Route::resource('/dashboard/prodi', ProdiController::class)->middleware('auth');
Route::resource('/dashboard/semester', SemesterController::class)->middleware('auth');
Route::resource('/dashboard/kelas', KelasController::class)->middleware('auth');
Route::resource('/dashboard/tahun', TahunController::class)->middleware('auth');  
Route::resource('/dashboard/mahasiswa', MahasiswaController::class)->middleware('auth');  
