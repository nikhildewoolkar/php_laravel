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
    return view('main');
});
Route::get('/menu', function () {
    return view('menu');
});
Route::get('/main', function () {
    return view('main');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::get('/testimonials', function () {
    return view('testimonials');
});
Route::get('/addnewitem', function () {
    return view('addnewitem');
});
Route::get('/todaysspecial', function () {
    return view('todaysspecial');
});
Route::get('/addtodaysspecial', function () {
    return view('addtodaysspecial');
});
Route::get('/contactus', function () {
    return view('contactus');
});
Route::get('/feedback', function () {
    return view('feedback');
});
Route::get('/viewdeletefeedback', function () {
    return view('viewdeletefeedback');
});
Route::get('/viewdeleteregisteredcustomers', function () {
    return view('viewdeleteregisteredcustomers');
});
Route::get('/viewupdatedeletemenuitem', function () {
    return view('viewupdatedeletemenuitem');
});
Route::get('/viewupdatedeleteorders', function () {
    return view('viewupdatedeleteorders');
});
Route::get('/viewupdatedeletetodaysspecial', function () {
    return view('viewupdatedeletetodaysspecial');
});
Route::get('/team', function () {
    return view('team');
});

Route::get('/register', function () {
    return view('register');
});
Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
