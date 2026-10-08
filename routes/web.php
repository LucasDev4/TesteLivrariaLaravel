<?php

use App\Http\Controllers\LivroController;
use Illuminate\Support\Facades\Route;

Route::get("/livros/index", [LivroController::class, "index"]);