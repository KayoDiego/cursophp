<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Arr;








Route::view('/', '/home');

Route::view('/contato', 'contato');

Route::resource('jobs', JobController::class);



Route::resource('produtos', ProdutoController::class);
