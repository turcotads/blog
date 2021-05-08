<?php

use App\Http\Controllers\Site\BlogController;
use App\Http\Controllers\Site\CategoryController;
use App\Http\Controllers\Site\HomeController;
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
Route::namespace('Site')->group(
    function () {
        Route::get('/', [HomeController::class, '__invoke']);

        Route::get('produtos', [CategoryController::class, 'index']);
        Route::get('produtos/{slug}', [CategoryController::class, 'show']);

        Route::get('blog', [BlogController::class, '__invoke']);
    }
);
