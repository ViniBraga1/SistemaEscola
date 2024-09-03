<?php

use Illuminate\Support\Facades\Route;

Route::resource('professores', ProfessorController::class);
Route::resource('disciplinas', DisciplinaController::class);

