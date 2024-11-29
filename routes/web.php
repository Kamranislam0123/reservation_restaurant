<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FrontenedController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/home2', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/',[FrontenedController::class,'home']);
// Route::get('/',[FrontenedController::class,'category']);
Route::post('/addcart/{id}',[FrontenedController::class,'addcart']);
Route::get('/showcart/{id}',[FrontenedController::class,'showcart']);
Route::get('/remove/{id}',[FrontenedController::class,'remove']);

Route::post('/orderconfirm',[FrontenedController::class,'orderConfirm']);
Route::post('showcart/Send/{id}',[FrontenedController::class,'mailInvoice']);

Route::get('/foodinCategory/{id}',[FrontenedController::class,'foodinCategory']);
Route::get('/fooddetails/{food_id}',[FrontenedController::class,'foodDetails']);


Route::get('/foodcart',[CartController::class,'foodcart']);




// Route::get('/',[HomeController::class,'category']);


// Route::get('/order',[CustomerController::class,'order']);
// Route::post('/orderConfirm',[CustomerController::class,'orderConfirm']);



Route::get('/dashboard',[AdminController::class,'dashboard']);
Route::get('/users',[AdminController::class,'users']);
Route::get('/deleteUsers/{id}',[AdminController::class,'delete']);
Route::get('/foodmenu',[AdminController::class,'foodmenu']);
Route::post('/uploadfood',[AdminController::class,'upload']);
Route::get('/deletefood/{food}',[AdminController::class,'deletefood']);
Route::get('/editfood/{food}',[AdminController::class,'editfood']);
Route::post('/updatefood/{food}',[AdminController::class,'updatefood']);

Route::post('/reservation',[AdminController::class,'reservationCreate']);
Route::get('/reservationview',[AdminController::class,'reservationview']);

Route::get('/viewChef',[AdminController::class,'viewChef']);
Route::post('/uploadChef',[AdminController::class,'uploadChef']);

Route::get('/orderidfoodid',[AdminController::class,'orderidfoodid']);


Route::post('/category',[CategoryController::class,'addCategory']);
Route::get('/category',[CategoryController::class,'viewCategory']);
Route::get('/delete/{category}',[CategoryController::class,'deletecat']);
Route::get('/edit/{category}',[CategoryController::class,'editcat']);
Route::post('/update/{category}',[CategoryController::class,'updatecat']);

Route::get('/category_id_by_food_id',[CategoryController::class,'Category_id_by_food_id']);
Route::post('/category_id_by_food_id',[CategoryController::class,'create_Category_id_by_food_id']);
Route::get('/delete/{categoryByFood}',[CategoryController::class,'deleteCategoryByFood']);

// Route::get('/foodinCategory/{category_slug}',[CategoryController::class,'foodinCategory']);


// Route::get('/orderedCustomer',[AdminController::class,'orderedCustomer']);




