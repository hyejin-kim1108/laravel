<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\Article;
use App\Attachment;
use Dotenv\Result\Success;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\Unique;

class FileUpLoadController extends Controller
{
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

        //파일올리기
        $file=$request->file('File');
        $user_id=Auth::user()->user_id;
        //dd(Auth::user()->user_id);

        //$user_id=(Auth::user()->user_id)->get();

        //$path=$request->file($FILE)->store('public.files');
        $filename=str_random().filter_var($file->getClientOriginalName(),FILTER_SANITIZE_URL);
        $path=$request->file('File')->store('\files');

            //$filename=str_random().filter_var($file->getClientOriginalName(),FILTER_SANITIZE_URL);

        $File_input=\App\Attachment::create([
            'user_id'=> $user_id,
            'filename'=> $filename,
            'bytes'=> $file->getSize(),
            'mime'=> $file->getClientMimeType(),
        ]);

        Alert::success('성공','저장이 완료되었습니다');
        return redirect()->back();
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
