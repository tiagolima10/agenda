<?php

use App\Http\Controllers\AgendasController;
use Illuminate\Support\Facades\Route;

/*ROTA WEB PARA ACESSAR A AGENDA*/ 
Route::resource('/agendas', AgendasController::class);

