<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('/user', userController::class);
Route::resource('/statuspaid', statuspaidController::class);
Route::resource('/statusgo',statusgoController::class); 
Route::resource('/profile',profileController::class);
Route::resource('/profilereg',profileController::class);
Route::resource('/userreg', userregController::class);


Route::get('/table/{table}',table::class.'@gettable');
Route::get('/check/{username}',userController::class.'@check');
Route::get('/login',userController::class.'@login');
Route::get('/checkreg/{username}',userregController::class.'@checkreg');
Route::get('/loginreg',userregController::class.'@loginreg');


