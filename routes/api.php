<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\MovimentacaoController;
use App\Http\Controllers\TipoMovimentacaoController;


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::apiResource('produtos', ProdutoController::class);

Route::get('/relatorios/produtos', 'RelatorioController@produtos')->name('relatorios.produtos');

Route::resource('movimentacao', MovimentacaoController::class);

Route::resource('tipo_movimentacao', TipoMovimentacaoController::class);

Route::resource('fornecedores', FornecedorController::class);
