<?php
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\Detail_TransaksiController;
use App\Http\Middleware\MustAdmin;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/welcome', function () {
    return view('welcome.welcome');
});

Route::get('admin/login',[loginController::class,'login_form'])->name('login');
Route::post('admin/login/authenticate',[loginController::class,'authenticate'])->name('authenticate');
Route::get('admin/logout',[loginController::class,'logout'])->name('logout');



Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard')->middleware('auth',);

Route::prefix('/outlet')->group(function(){
    Route::name('outlet.')->group(function(){
        Route::get('/index',[OutletController::class, 'index'])->name('index')->middleware('auth','must-admin');;
        Route::get('/create',[OutletController::class, 'create'])->name('create')->middleware('auth','must-admin');;
        Route::post('/store',[OutletController::class, 'store'])->name('store')->middleware('auth','must-admin');;
        Route::get('/destroy/{id}',[OutletController::class, 'destroy'])->name('destroy')->middleware('auth','must-admin');;
        Route::get('edit/{id}',[OutletController::class, 'edit'])->name('edit')->middleware('auth','must-admin');;
        Route::post('update/{outlet}',[OutletController::class, 'update'])->name('update')->middleware('auth','must-admin');;           
    });
});

Route::prefix('/member')->group(function(){
    Route::name('member.')->group(function(){
        Route::get('/index',[MemberController::class, 'index'])->name('index');
        Route::get('/create',[MemberController::class, 'create'])->name('create');
        Route::post('/store',[MemberController::class, 'store'])->name('store');
        Route::get('/destroy/{id}',[MemberController::class, 'destroy'])->name('destroy');
        Route::get('edit/{id}',[MemberController::class, 'edit'])->name('edit');
        Route::post('update/{member}',[MemberController::class, 'update'])->name('update');           
    });
});

Route::prefix('/user')->group(function(){
    Route::name('user.')->group(function(){
        Route::get('/index',[UserController::class, 'index'])->name('index');
        Route::get('/create',[UserController::class, 'create'])->name('create');
        Route::post('/store',[UserController::class, 'store'])->name('store');
        Route::get('/destroy/{id}',[UserController::class, 'destroy'])->name('destroy');
        Route::get('edit/{id}',[UserController::class, 'edit'])->name('edit');          
        Route::post('update/{id}',[UserController::class, 'update'])->name('update');
    });
});

Route::prefix('/paket')->group(function(){
    Route::name('paket.')->group(function(){
        Route::get('/index',[PaketController::class, 'index'])->name('index');
        Route::get('/create',[PaketController::class, 'create'])->name('create');
        Route::post('/store',[PaketController::class, 'store'])->name('store');
        Route::get('/destroy/{id}',[PaketController::class, 'destroy'])->name('destroy');
        Route::get('edit/{id}',[PaketController::class, 'edit'])->name('edit');          
        Route::post('update/{id}',[PaketController::class, 'update'])->name('update');
    });
});

Route::prefix('/transaksi')->group(function(){
    Route::name('transaksi.')->group(function(){
        Route::get('/index',[TransaksiController::class, 'index'])->name('index');
        Route::get('/create',[TransaksiController::class, 'create'])->name('create');
        Route::post('/store',[TransaksiController::class, 'store'])->name('store');
        Route::get('/destroy/{id}',[TransaksiController::class, 'destroy'])->name('destroy');
        Route::get('edit/{id}',[TransaksiController::class, 'edit'])->name('edit');          
        Route::post('update/{id}',[TransaksiController::class, 'update'])->name('update');
    });
});

Route::prefix('/detail_transaksi')->group(function(){
    Route::name('detail_transaksi.')->group(function(){
        Route::get('/index',[Detail_TransaksiController::class, 'index'])->name('index');
        Route::get('/create',[Detail_TransaksiController::class, 'create'])->name('create');
        Route::post('/store',[Detail_TransaksiController::class, 'store'])->name('store');
        Route::get('/destroy/{id}',[Detail_TransaksiController::class, 'destroy'])->name('destroy');
        Route::get('edit/{id}',[Detail_TransaksiController::class, 'edit'])->name('edit');          
        Route::post('update/{id}',[Detail_TransaksiController::class, 'update'])->name('update');
    });
});
