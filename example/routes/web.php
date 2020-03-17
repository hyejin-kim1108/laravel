<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
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

//단순 사이트 이동 && get으로 받은 것들
Route::get('/', function () {return view('User.Main');});
Route::get('/Register', function () {return view('User.Register');});
Route::get('/Login', function () {return view('User.Login');});
Route::get('/List', function () {return view('List.List');});
Route::get('/UpdateUser','UserController@UpdateIndex');
Route::get('/Signout', function() {return view('User.Signout');});

//Post
Route::post('/Register','UserController@store');
Route::post('/Login', 'LoginController@store');
Route::post('/UpdateUser','UserController@update');
Route::post('/Signout','UserController@destroy');
Route::post('File_Upload','FileUpLoadController@store');

//삭제관련
Route::get('/Logout',function(){
    Auth::logout();
    Alert::success('완료','로그아웃이 완료 되었습니다. 바이바이!');
    return redirect('/');
});
