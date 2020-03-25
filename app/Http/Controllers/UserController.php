<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\validate;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Session;

class UserController extends Controller
{
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    public function redirectTo()
    {
        return redirect()->intended('/');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){}

    public function UpdateIndex(Request $request)
    {
        return view('User.UpdateUser');
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

        $validator=validator::make($request->all(),[
            'name'=>'required|string',
            'id'=>'required',
            'password'=>'required|min:4',
            'email'=>'required|email',
        ]);

        if($validator->fails())
        {
            Alert::error('재확인요망','빈칸이 있습니다.');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $id_data=DB::table('users')->where('id',$input['id'])->exists();
        $email_data=DB::table('users')->where('email',$input['email'])->exists();

        //아이디 중복조회
        if($id_data==$input['id'])
        {
            Alert::error('실패','중복된 아이디 입니다.');
            return redirect()->back()->withInput();
        }

        //이메일 중복조회
        if($email_data==$input['email'])
        {
            Alert::error('실패','중복된 이메일 입니다.');
            return redirect()->back()->withInput();
        }

        else
        {
            $user=\App\User::create([
                'name'=>$request->input('name'),
                'id'=>$request->input('id'),
                'password'=>bcrypt($request->input('password')),
                'email'=>$request->input('email'),
            ]);

            Alert::success('회원가입완료','해당 아이디로 로그인해주세요');
            return redirect('/');
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
    public function update(Request $request)
    {
        $user_id=Auth::user()->user_id;
        $id=Session::get('id');

        $user=User::find($id);

        $input=$request->all();

        $this->validate($request,[
            'password'=>'min:4',
        ]);

        $user_update=DB::table('users')->where('id',$id)
                    ->update(array(
                            'password'=>$input['password'],
                    ));
        Alert::success('완료','회원정보 수정이 완료되었습니다.');
        return redirect('/');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $user_id=Auth::user()->user_id;

        switch($request->input('button'))
        {
            case 'Yes_Click' :
                DB::table('users')->where('user_id','=',$user_id)->delete();

                Alert::success('완료','회원탈퇴가 처리되었습니다.');
                return redirect('/');
            break;
            case 'No_Click' :
                Alert::success('완료','회원탈퇴가 취소되었습니다.');
                return redirect('/');
            break;
        }
    }
}
