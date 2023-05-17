<?php

// use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\LoginController;
// use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\HobiController;
use App\Http\Controllers\KeluargaController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\NewsController;
// use App\Http\Controllers\ProgramController;
// use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Routing\Router;
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

// PRAKTIKUM 1

/*Route::get('/', function () {
    echo "Selamat Datang";
});

Route::get('/about', function () {
    echo "2141720054 Diah Putri Nofianti";
});

Route::get('/articles/{id}', function ($id) {
    echo "Halaman Artikel dengan ID ".$id;
});
*/

// PRAKTIKUM 1 (Pertemuan 3)

/*
Route::get('/', function () {
    return view('home');
});

Route::prefix('product')->group(function () {
    Route::get('/', [ProductController::class, 'index']);
});

Route::get('/news/{n}', [NewsController::class, 'news']);

Route::prefix('program')->group(function () {
    Route::get('/', [ProgramController::class, 'index']);
});

Route::get('/about-us', [AboutController::class, 'about']);

Route::resource('/contact-us', ContactController::class)->only('index');
*/

// PRAKTIKUM 2 - PageController

/*
Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/articles/{id}', [PageController::class, 'article']);
*/

// PRAKTIKUM 2 - Single Action Controller
/*
Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'about']);

Route::get('/articles/{id}', [ArticleController::class, 'articles']);
*/


// PRAKTIKUM 3 (Pertemuan 2)

/*
//Halaman Home
Route::get('/', [HomeController::class, 'index']);

// Halaman Products (route prefix)
Route::prefix('category')->group(function () {
    Route::get('/', [ProductController::class, 'index']);
    Route::get('/games', [ProductController::class, 'games']);
    Route::get('/books', [ProductController::class, 'books']);
    Route::get('/songs', [ProductController::class, 'songs']);
});

// Halaman News (route param)
Route::get('/news/{n}', [NewsController::class, 'news']);

// Halaman Program (route prefix)
Route::prefix('program')->group(function () {
    Route::get('/', [ProgramController::class, 'index']);
    Route::get('/karir', [ProgramController::class, 'karir']);
    Route::get('/magang', [ProgramController::class, 'magang']);
    Route::get('/industri', [ProgramController::class, 'industri']);
});

//Halaman About Us (route biasa)
Route::get('/about', [AboutController::class, 'about']);

//Halaman Contact Us (route resource only)
Route::resource('/contact', ContactController::class)->only('index');
*/

Auth::routes();

Route::get('/logout', [LoginController::class, 'logout']);

Route::middleware(['auth'])->group(function () {
    // PRAKTIKUM 2 (Pertemuan 3)

    route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    route::get('/profile/{name}', [ProfileController::class, 'index'])->name('profile');
    route::get('/experience', [ExperienceController::class, 'index'])->name('experience');
    route::get('/artikel/cetak_pdf', [ArticleController::class, 'cetak_pdf']);

    // PRAKTIKUM TUGAS (Pertemuan 4)
    /*
    route::get('/articles', [ArticleController::class, 'index'])->name('articles');
    route::get('/hobbies', [HobiController::class, 'index'])->name('hobi');
    route::get('/families', [KeluargaController::class, 'index'])->name('keluarga');
    route::get('/courses', [MatkulController::class, 'index'])->name('matkul');
    */
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    //Pertemuan 8 CRUD
    Route::resource('/mahasiswa', MahasiswaController::class);
    Route::resource('/hobi', HobiController::class);
    Route::resource('/matkul', MatkulController::class);
    Route::resource('/keluarga', KeluargaController::class);
    Route::resource('/artikel', ArticleController::class);
    Route::get('/mahasiswa/{id}/khs', [MahasiswaController::class, 'khs'])->name('mahasiswa.khs');
});
