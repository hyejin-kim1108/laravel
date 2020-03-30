<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use App\Article;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Article_DB=DB::select('select * from article')->all();
        $user_id=$Article_DB->where('user_id');
        $Article_id=$Article_DB->where('Article_id');
        $Article_Title=$Article_DB->where('Article_Title');
        $Article_text=$Article_DB->where('Article_text');


        return view('List.Viewarticle')->with('Article_DB',$Article_DB)->firstOrFail();
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
        //게시판 쓰기
        $input=$request->all();
        //파일올리기
        $file=$request->file('File');
        $user_id=Auth::user()->user_id;

        $filename=str_random().filter_var($file->getClientOriginalName(),FILTER_SANITIZE_URL);
        $path=$request->file('File')->store('\files');
        $Article_input=\App\Article::create([
            'user_id'=>$user_id,
            'Article_Title'=>$request->input('List_Title'),
            'Article_text'=>$request->input('List_Enter'),
            'filename'=>$filename,
            'bytes'=> $file->getSize(),
            'mime'=> $file->getClientMimeType(),
        ]);

        Alert::success('성공','저장이 완료되었습니다');
        return redirect()->intended('/');
    }

    public function format_filesize($bytes)
    {
        if(! is_numeric($bytes))
        {return 'NaN';}

        $desc=1024;
        $step=0;
        $suffix=['bytes','KB','KB'];
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

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
