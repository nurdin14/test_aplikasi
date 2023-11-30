<?php

use App\Http\Controllers\productController;
use App\Http\Controllers\transactionController;
use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::middleware(['auth'])->group(function () {
    Route::get('/product', [productController::class, 'index'])->name('product');
    Route::get('/addProduct', [productController::class, 'addProduct'])->name('addProduct');
    Route::post('/aksiTambah', [productController::class, 'aksiTambah'])->name('aksiTambah');
    Route::get('/ubah/{id_product}', [productController::class, 'ubah'])->name('ubah');
    Route::post('/aksiUbah/{id_product}', [productController::class, 'aksiUbah'])->name('aksiUbah');
    Route::get('/hapus/{id_product}', [productController::class, 'hapus'])->name('hapus');

    Route::get('/trans', [transactionController::class, 'index'])->name('trans');
    Route::get('/addTransaksi', [transactionController::class, 'addTransaksi'])->name('addTransaksi');
    Route::post('/aksiTambah', [transactionController::class, 'aksiTambah'])->name('aksiTambah');
    Route::get('/logout', [AuthController::class, 'logout']);
});

