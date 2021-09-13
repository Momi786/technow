<?php

use Illuminate\Support\Facades\Route;

// Web Controller
use App\Http\Controllers\HomeController;


// Admin Controlller
use App\Http\Controllers\AdminHome;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;


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

// Route::get('/', function () {
//     return view('Web/home');
// });

// Web Routes
Route::get('/',[HomeController::class,'index']);
Route::get('/services',[HomeController::class,'services']);
Route::get('/team',[HomeController::class,'team']);
Route::get('/about',[HomeController::class,'about']);
Route::get('/contact',[HomeController::class,'contact']);





// Admin Panel Routes

Route::get('/admin',[AdminHome::class,'adminHome']);
Route::post('/admin',[AdminHome::class,'loginProcess']);

    // Login Route
    Route::get('/login', [AdminHome::class,'login']);



// Services Routes
Route::group(['prefix'=>'admin'], function(){
    Route::get('/logout',[AdminHome::class,'logout']);
    Route::get('/home-content',[AdminHome::class,'homeContent']);
    Route::post('/home-content',[AdminHome::class,'homeContentChange']);
    // Services Routes
    Route::get('/services-list',[ServicesController::class,'serviceList']);
    Route::get('/add-service',[ServicesController::class,'addService']);
    Route::post('/add-service',[ServicesController::class,'addprocess']);
    Route::get('/edit/{id}',[ServicesController::class,'edit']);
    Route::post('/edit/{id}',[ServicesController::class,'editProcess']);
    Route::get('/delete/{id}',[ServicesController::class,'delete']);
    // Team Routes
    Route::get('/team-list',[TeamController::class,'teamList']);
    Route::get('/add-team',[TeamController::class,'teamService']);
    Route::post('/add-team',[TeamController::class,'addprocess']);
    Route::get('/edit-team/{id}',[TeamController::class,'edit']);
    Route::post('/edit-team/{id}',[TeamController::class,'editProcess']);
    Route::get('/delete-team/{id}',[TeamController::class,'delete']);

    // User Crud
    Route::get('/user-list',[UserController::class,'userlist']);
    Route::get('/add-user',[UserController::class,'adduser']);
    Route::post('/add-user',[UserController::class,'addprocess']);


    // team Page contant
    Route::get('/team-page-contant',[TeamController::class,'teamPage']);
    // spinser routes
    Route::get('/sponser',[TeamController::class,'sponser']);


});








