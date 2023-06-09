<?php

 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('login');
// });
Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'ShowLoginForm']);

Auth::routes(['register' => false]);


Route::prefix('admin')->group(function(){
    Route::group(['middleware' => 'auth'], function(){

        //dashboard
        Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

        //form
        Route::get('/form', [App\Http\Controllers\Admin\FormController::class, 'index'])->name('form');

        //user
        Route::get('/user', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('user');

        //user
        Route::get('/user/create', [App\Http\Controllers\Admin\UserController::class, 'create'])->name('user.create');

        //user
        Route::get('/user/edit/{id}', [App\Http\Controllers\Admin\UserController::class, 'edit'])->name('user.edit');

        //user
        Route::put('/user/update/{id}', [App\Http\Controllers\Admin\UserController::class, 'update'])->name('user.update');

        //user post
        Route::post('user/store', [App\Http\Controllers\Admin\UserController::class, 'store'])->name('user.store');

        //list data
        Route::get('/listdata', [App\Http\Controllers\Admin\ListDataController::class, 'index'])->name('listdata');

        //rinicianbiaya
        Route::get('/rincianbiaya', [App\Http\Controllers\Admin\RincianBiayaController::class, 'index'])->name('rincianbiaya');

        //rinicianbiaya
        Route::get('/rincianbiaya/create', [App\Http\Controllers\Admin\RincianBiayaController::class, 'create'])->name('rincianbiaya.create');

        //rinicianbiaya
        Route::post('/rincianbiaya/store', [App\Http\Controllers\Admin\RincianBiayaController::class, 'store'])->name('rincianbiaya.store');

        //tenagakerja
        Route::get('/tenagakerja', [App\Http\Controllers\Admin\TenagaKerjaController::class, 'index'])->name('tenagakerja');

        //tenagakerja
        Route::get('/tenagakerja/create', [App\Http\Controllers\Admin\TenagaKerjaController::class, 'create'])->name('tenagakerja.create');

        //tenagakerja
        Route::post('/tenagakerja/store', [App\Http\Controllers\Admin\TenagaKerjaController::class, 'store'])->name('tenagakerja.store');

          
    });
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
