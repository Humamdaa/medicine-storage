<?php

use App\Http\Controllers\Send\AdminController;
use App\Http\Controllers\Send\SendDataFromDB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::group(['middleware' => ['userIsGuest']], function () {
    //if user register successful will go to usr’s home page
    // and I will send data to front-end,so I use post

    Route::post('registration', [SendDataFromDB::class, 'showHome'])->name('register.post');
});


Route::group(['middleware' => ['checkLanguage','userIsAuth']], function () {
    Route::post('login', [SendDataFromDB::class, 'showHome'])->name('login.post');
    //inside home
    Route::get('home', [SendDataFromDB::class, 'showHome'])->name('home');
    Route::get('home/setting/{idOfUser}', [SendDataFromDB::class, 'showSetting']);
    Route::get('home/setting/logout', [SendDataFromDB::class, 'logout']);

    //additional things
//    Route::post('homeOfUser/setting/changePassword',)

    //inside orders

    //inside shop
    Route::get('shop', [SendDataFromDB::class, 'showShop']);
    Route::get('shop/{nameOfCategory}', [SendDataFromDB::class, 'showMedicinesInThisCategory']);
    Route::get('shop/med/{nameOfMedicine}', [SendDataFromDB::class, 'detailsSpecificMedicine']);
    Route::post('search', [SendDataFromDB::class, 'search']);


    Route::get('orders/{idOfUser}', [SendDataFromDB::class, 'showOrders']);
    Route::post('addToCart/{idOfUser}', [SendDataFromDB::class, 'addCartToOrders']);

    //favourite add and show
    Route::get('addToFavourite/{idOfUser}/{idMedicine}', [SendDataFromDB::class, 'addToFavourite']);
    Route::get('showFavourite/{idOfUser}', [SendDataFromDB::class, 'showFavourite']);
    Route::delete('deleteFromFavourite/{idOfUser}/{idMedicine}',[SendDataFromDB::class,'deleteFromFavouriteMedicine']);
});

Route::get('admin/home',[AdminController::class,'showCategories']);
Route::get('admin/shop/{nameOfCategory}', [SendDataFromDB::class, 'showMedicinesInThisCategory']);
Route::get('admin/med/{nameOfMedicine}', [SendDataFromDB::class, 'detailsSpecificMedicine']);

Route::post('admin/addMed',[AdminController::class,'store']);
Route::put('admin/updateMed/{idOfMed}',[AdminController::class,'update']);

//Route::get('admin/home',[AdminController::class,'showCategories']);

