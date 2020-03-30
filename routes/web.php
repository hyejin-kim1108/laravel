<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
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
Route::get('/', function () {
    return view('User.Main');
});
Route::get('/Register', function () {return view('User.Register');});
Route::get('/Login', function() {return view('User.Login');})->name('Login');
Route::get('/List', function () {
    return view('List.Viewarticle');
    if (!Auth::check())
    {
        Alert::error('접근불가','로그인을 다시 해주세요');
        return view('User.Main');
    }
});
Route::get('/UpdateUser','UserController@UpdateIndex');
Route::get('/Signout', function() {return view('User.Signout');});

Route::get('/List_View','ArticleController@index');


//Post
Route::post('/Register', 'UserController@store');
Route::post('/Login', 'LoginController@store');
Route::post('/UpdateUser','UserController@update');
Route::post('/Signout','UserController@destroy');
Route::post('/List','ArticleController@store');

//삭제관련
Route::get('/Logout',function(){
    Auth::logout();
    Alert::success('완료','로그아웃이 완료 되었습니다. 바이바이!');
    return redirect('/');
});
