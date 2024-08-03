<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BTVN3Controller;
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

Route::prefix("btvn3")
    ->as("btvn3.")
    ->group(function () {
        // Bai 1:
        Route::get('command-basic', [BTVN3Controller::class, "commandBasic"]);
        // Bai 2:
        Route::get("list-users", [BTVN3Controller::class, "ListUsers"]);
        // Bai 3:
        Route::get("clear-old-logs", [BTVN3Controller::class, "clearOldLogs"]);
        // Bai 4:
        Route::get("send-daily-report", [BTVN3Controller::class, "sendDailyReport"]);
        // Bai 5:
        Route::get("send-weekly-email", [BTVN3Controller::class, "sendWeeklyEmail"]);
        
        // Bai tap ung dung queue job
        Route::get("send-bulk-email", [BTVN3Controller::class, "sendBulkEmail"]);
        
    });