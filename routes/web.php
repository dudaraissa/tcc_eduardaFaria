<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\MovimentacaoController;
use App\Http\Controllers\TipoMovimentacaoController;

Route::get('/', function () {
    return view('home');
});

 Route::get('login', function () {
     return view('login');
 })->name('login');

Route::get('fornecedores', function () {
    return view('fornecedores');
});

Route::get('funcionarios', function () {
    return view('funcionarios');
});

Route::get('dashboard', function () {
    return view('dashboard');
});

Route::get('map', function () {
    return view('map');
});

Route::get('perfil', function () {
    return view('perfil');
});
/*
Route::get('produtos', function () {
    return view('produtos');
});*/

Route::get('relatorios', function () {
    return view('relatorios');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/profile', function () {
    return view('profile.show');
})->name('profile.show');


Route::resource('fornecedores', FornecedorController::class);

Route::resource('produtos', ProdutoController::class);

Route::get('/relatorios/produtos', 'RelatorioController@produtos')->name('relatorios.produtos');

Route::resource('movimentacao', MovimentacaoController::class);

Route::resource('tipo_movimentacao', TipoMovimentacaoController::class);
