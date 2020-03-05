<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Symfony\Component\HttpFoundation\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Session;
use Symfony\Component\Console\Input\Input;

//경로 없이 1개만 있는거
use App\User;

//인증
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Validation\ValidationException;

//DB연결
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index()
    {}

    public function store(Request $request)
    {
        $id=$request->input('id');
        $password=$request->input('password');

        if($id=="" || $password=="")
        {
            Alert::question('실패','빈칸을 확인해주세요');
            return redirect()->back();
        }

        $id_data=DB::table('users')->where('id',$id)->exists();
        $password_data=DB::table('users')->where('password',$password)->exists();

        if($id_data!=$id || $password_data!=$password)
        {
            Alert::error('실패','아이디나 비밀번호를 다시 확인해주세요');
            return redirect()->back();
        }

        else
        {
            $request->session()->put('id','$id');
            Alert::success('로그인완료','어서오세요');
            return redirect('list');
        }
    }

    public function destroy(Request $request)
    {
        $request->session()->forget('id');
        Alert::success('완료','로그아웃이 완료 되었습니다. 바이바이!');
        return redirect('/');
    }

}
