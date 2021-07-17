<?php

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
//    return view('welcome');
// });

Route::get('/', function () { return redirect('dashboard/analytical'); });

/* Dashboard */
Route::get('dashboard', function () { return redirect('dashboard/analytical'); });
Route::get('dashboard/analytical', 'DashboardController@analytical')->name('dashboard.analytical');

/* Authentication */
Route::get('authentication', function () { return redirect('authentication/login'); });
Route::get('authentication/login', 'AuthenticationController@login')->name('authentication.login');
Route::get('authentication/register', 'AuthenticationController@register')->name('authentication.register');
Route::get('authentication/forget-password', 'AuthenticationController@forgetPassword')->name('authentication.forget-password');


/* Csv file import */
Route::get('/import', 'ImportLocationController@index'); // localhost:8000/
Route::post('/uploadFile', 'ImportLocationController@uploadFile');

