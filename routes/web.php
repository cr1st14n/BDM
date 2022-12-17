<?php

use App\Http\Controllers\MeetController;
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

Route::get('/', function () {
    return view('inicio');
});

Route::group(['prefix'=>'meet'],function ()
{
    Route::get('/',[MeetController::class,'view_1']);
    Route::get('/create',[MeetController::class,'view_2']);
    Route::get('/store_1',[MeetController::class,'store_1']);

});
