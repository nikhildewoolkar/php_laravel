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

Route::get('/', function () {
    return view('home');
});
Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::get('/contactus', function () {
    return view('contactus');
});
Route::get('/feedback', function () {
    return view('feedback');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/addmenuitem', function () {
    return view('addmenuitem');
});
Route::get('/viewupdatedeletemenuitem', function () {
    return view('viewupdatedeletemenuitem');
});
Route::get('/addtodaysspecial', function () {
    return view('addtodaysspecial');
});
Route::get('/viewupdatedeletetodaysspecial', function () {
    return view('viewupdatedeletetodaysspecial');
});
Route::get('/viewdeletefeedback', function () {
    return view('viewdeletefeedback');
});
Route::get('/viewdeleteregisteredcustomers', function () {
    return view('viewdeleteregisteredcustomers');
});
Route::get('/viewupdatedeleteorders', function () {
    return view('viewupdatedeleteorders');
});
Route::get('/adminhome', function () {
    return view('adminhome');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
