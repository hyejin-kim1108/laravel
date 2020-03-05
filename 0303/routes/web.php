<?php

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

//페이지 이동 설정
Route::get('/', function () {
    return view('main');
});

Route::get('/join', function(){
    return view('User\join');
});
Route::get('/login',function(){
    return view('User\login');
});
//로그인 관련

//Route::get('/login',function(){return view('User\login');})->middleware('login');
//Route::get('/login','Auth\LoginController@index');

//name으로 지정했던 부분들
Route::post('join','Auth\RegisterController@store');
//Route::post('/join.checkcomp','Auth\RegisterController@find');
Route::post('login','Auth\LoginController@store')->name('login.store');

//미들웨어 관리
//Route::get('/login','Auth\LoginController@store')->middleware('LoginMiddleware');

//컨트롤러에서 지정한 거
