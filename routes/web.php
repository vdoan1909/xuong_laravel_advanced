<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\RateController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::prefix("article")
    ->as("article.")
    ->group(function () {
        Route::get('/', [ArticleController::class, "index"])->name("index");
        Route::get('view-comment/{id}', [ArticleController::class, "viewComment"])->name("viewComment");
        Route::get('view-avg-rate/{id}', [ArticleController::class, "avgRate"])->name("avgRate");
    });

Route::prefix("video")
    ->as("video.")
    ->group(function () {
        Route::get('/', [VideoController::class, "index"])->name("index");
        Route::get('view-rate/{id}', [VideoController::class, "viewRate"])->name("viewRate");
    });

Route::prefix("user")
    ->as("user.")
    ->group(function () {
        Route::get('/', [UserController::class, "index"])->name("index");
        Route::get('view-comment/{id}', [UserController::class, "viewComment"])->name("viewComment");
        Route::get('user-comment/{id}', [UserController::class, "getUserComments"])->name("getUserComments");
    });

Route::get('image', [ImageController::class, "index"]);

Route::get('comment', [CommentController::class, "index"]);

Route::get('rate', [RateController::class, "index"]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
