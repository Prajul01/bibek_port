<?php

use App\Http\Controllers\UserDetails;
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
    return view('users.index');
});

// Route::get('users/about', function () {
//     return view('users.about');
// });
 Route::get('users/resume', function () {
     return view('users.resume');
 });
//Route::get('user/resume','UserDetails')
Route::get('users/contact', function () {
    return view('users.contact');
});
Route::get('fillable/info', function () {
    return view('fillable.info');
});
Route::post('fillable/store', [UserDetails::class, 'store'])->name('fillable.store');
//Route::get('users/about/{id}', [UserDetails::class, 'about'])->name('users.about');
Route::get('user/index',[UserDetails::class,'index'])->name('user.index');

// Route::get('users/index', [UserDetails::class, 'index'])->name('users.index');
// Route::get('users/about', [UserDetails::class, 'index'])->name('users.about');
