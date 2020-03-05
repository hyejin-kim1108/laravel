<?php

session_start();

use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;
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
Route::get('/list',function(Request $request){
    if(session('id'))
    {return view('List.list');}

    if(!session('id'))
    {
        Alert::error('실패','로그인이 안되었습니다. 다시해주세요');
        return redirect('/');
    }
});
Route::get('/logout', 'Auth\LoginController@destroy');

//유저관련 지정했던 부분들
Route::post('join','Auth\RegisterController@store');
Route::post('login','Auth\LoginController@store')->name('login.store');

//리스트 관련 지정했던 부분들

//미들웨어 관리
//Route::get('/login','Auth\LoginController@store')->middleware('LoginMiddleware');

//컨트롤러에서 지정한 거
