<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SPPController;
use App\Http\Controllers\SiswaController;
use app\Models\Siswa;

// Rute untuk halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Rute untuk PostController
Route::get("/post", [PostController::class, "index"])->name("posts.index");
Route::get("/post/create", [PostController::class, "create"])->name("posts.create");
Route::post("/post", [PostController::class, "store"])->name("posts.store");
Route::delete("/post/{id}", [PostController::class, "delete"])->name("posts.destroy");
Route::get("/post/{id}", [PostController::class, "show"])->name("posts.show");
Route::get("/post/{id}/edit", [PostController::class, "edit"])->name("posts.edit");
Route::put("/post/{id}", [PostController::class, "update"])->name("posts.update");

// Rute untuk KelasController
Route::prefix('kelas')->name('kelas.')->group(function () {
    Route::get('/', [KelasController::class, 'index'])->name('index');
    Route::get('/create', [KelasController::class, 'create'])->name('create');
    Route::post('/', [KelasController::class, 'store'])->name('store');
    Route::get('/{id_kelas}', [KelasController::class, 'show'])->name('show');
    Route::delete('/{id_kelas}', [KelasController::class, 'delete'])->name('destroy');
    Route::get('/{id_kelas}/edit', [KelasController::class, 'edit'])->name('edit');
    Route::put('/{id_kelas}', [KelasController::class, 'update'])->name('update');
});

// Rute untuk SPPController
Route::group(['prefix' => 'spp', 'as' => 'spp'], function () {
    Route::get('/', [SPPController::class, 'index'])->name('.index');
    Route::get('/create', [SPPController::class, 'create'])->name('.create');
    Route::post('/', [SPPController::class, 'store'])->name('.store');
    Route::get('/{id_spp}', [SPPController::class, 'show'])->name('.show');
    Route::delete('/{id_spp}', [SPPController::class, 'delete'])->name('.destroy');
    Route::get('/{id_spp}/edit', [SPPController::class, 'edit'])->name('.edit');
    Route::put('/{id_spp}', [SPPController::class, 'update'])->name('.update');
});
// Rute untuk SiswaController
Route::group(['siswa' => 'siswa', 'as' => 'siswa.'], function () {
    Route::get('/', [SiswaController::class, 'index'])->name('index');
    Route::get('/create', [SiswaController::class, 'create'])->name('create');
    Route::post('/', [SiswaController::class, 'store'])->name('store');
    Route::get('/{id_siswa}', [SiswaController::class, 'show'])->name('show');
    Route::delete('/{id_siswa}', [SiswaController::class, 'delete'])->name('destroy');
    Route::get('/{id_siswa}/edit', [SiswaController::class, 'edit'])->name('edit');
    Route::put('/{id_siswa}', [SiswaController::class, 'update'])->name('update');
});

// Route::resource('siswa', SiswaController::class);
