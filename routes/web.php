<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
/*Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', function () {
    return view('login');
});
//Route::get('register', 'App\Http\Controllers\UserController@create');
//Route::get('/register', 'App\Http\Controllers\UserController@create');
Route::get('register', [UserController::class, 'create']);
/*Route::get('/register', function () {
    return 'It works!';
});
Route::get('register', [UserController::class, 'create']);*/

Route::controller(UserController::class)->group( function() {
    Route::any('login','login')->name('login');
   // dd('here');
    //  Route::get('expense', 'budgetBilling.budgetExpenseList');
  //    Route::get('register', 'create');
      //Route::post('storeUser/{id}', 'updateBten' );
    Route::post('storeUser', 'StoreUser' );
    Route::get('home','home')->name('home');
     
});
