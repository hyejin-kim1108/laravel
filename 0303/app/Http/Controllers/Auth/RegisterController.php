<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\User;
use Symfony\Component\HttpFoundation\Session\Session;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Validation\ValidationException;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Auth\input;
use Dotenv\Regex\Success;
use Illuminate\Routing\RedirectController;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{

    use RegistersUsers;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\RedirectResponse
     */

    public function store(Request $request)
    {

        $name=$request->input('name');
        $id=$request->input('id');
        $password=$request->input('password');
        $email=$request->input('email');

        if($name=="" || $id=="" || $password=="" || $email=="")
        {
            Alert::question('실패','빈칸을 확인해주세요');
            return redirect()->back();
        }

        $id_data=DB::table('users')->where('id',$id)->exists();
        $email_data=DB::table('users')->where('email',$email)->exists();

        //아이디 중복조회
        if($id_data==$id)
        {
            Alert::error('실패','중복된 아이디 입니다.');
            return redirect()->back();
        }

        //이메일 중복조회
        if($email_data==$email)
        {
            Alert::error('실패','중복된 이메일 입니다.');
            return redirect()->back();
        }

        else
        {
            $this->validate($request,[
                'name'=>'required',
                'id'=>'required|max:20|unique:users',
                'password'=>'required|min:4',
                'email'=>'required|unique:users',
            ]);

            $user=\App\User::create([
                'name'=>$request->input('name'),
                'id'=>$request->input('id'),
                'password'=>$request->input('password'),
                'email'=>$request->input('email'),
            ]);

            $user->save;
            $request->session()->put('name','$name');
            $request->session()->put('id','$id');
            Alert::success('회원가입완료','해당 아이디로 로그인해주세요');
            return redirect('/');
        }


    }
    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

