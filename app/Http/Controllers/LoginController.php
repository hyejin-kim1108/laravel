<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $redirectTo='/';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();
        $id=$input['id'];
        $password=$input['password'];

        $validator=validator::make($request->all(),[
            'id'=>'required',
            'password'=>'required|min:4',
        ]);

       if($validator->fails())
        {
            $file=\App\User::create([]);
            Alert::error('재확인요망','빈칸이 있습니다.');
            return redirect('/Login')->withErrors($validator)->withInput();
        }

        if(! auth()->attempt(array('id'=>$id,'password'=>$password)))
        {
            Alert::error('재입력요망','아이디나 비밀번호가 틀립니다.');
            return redirect()->back();
        }
        else
        {
            Alert::success('성공','로그인이 완료되었습니다.');
            return redirect()->intended('/');
        }
    }
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        Alert::success('완료','로그아웃이 완료 되었습니다. 바이바이!');
        return redirect('/');
    }
}
