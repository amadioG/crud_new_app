<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\AlunoController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/alunos', [AlunoController::class, 'index'])->name('alunos.index');
Route::get('/alunos/registrar', [AlunoController::class, 'create'])->name('alunos.create');
Route::post('/alunos', [AlunoController::class, 'store'])->name('alunos.store');

Route::get('/disciplinas', [DisciplinaController::class, 'index'])->name('disciplinas.index');
Route::get('/disciplinas/registrar', [DisciplinaController::class, 'create'])->name('disciplinas.create');
Route::post('/disciplinas', [DisciplinaController::class, 'store'])->name('disciplinas.store');
