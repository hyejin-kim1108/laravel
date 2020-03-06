<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class ListPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {    
      /*  if(!session('id'))
        {
            Alert::error('실패','로그인이 안되었습니다. 다시해주세요');
            return redirect('/');
        }

        if(session('id'))
        {
        $id=session()->get('id');
        //$id_data=$request->input($id);
        $name_data=DB::table('users')->where('id','test1-1')->select('name')->get('');

        return view('List.list',$name_data);

        }*/

        if ( ! session('id'))  {
            Alert::error('실패','로그인이 안되었습니다. 다시해주세요');
            return redirect('/');
        }
        
        $id = session()->get('id');
        $nameData = DB::table('users')->where('id', $id)->firstOrFail();
        return view('list.list', compact('nameData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function create()
    {
        return view('List.list');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $id=Session()->get('id');
        $name_data=DB::table('users')->where('id',$id)->value('name');


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
    public function destroy($id)
    {
        //
    }
}
