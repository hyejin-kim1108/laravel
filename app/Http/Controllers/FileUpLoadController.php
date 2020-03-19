<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use App\Article;
use App\Attachment;
use Illuminate\Support\Facades\Storage;

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
        $file=$request->file('File');
        //$path=$request->file($FILE)->store('public.files');
        $validator=validator::make($request->all(),[
            'File'=>'mimes:jpg,png,zip | max:30000',
        ]);

        /*if($request->hasFile('File'))
        {
            $files=$request->file('File');
            foreach($files as $file)
            {
                $filename=str_random().filter_var($file->getClientOriginalName(),FILTER_SANITIZE_URL);
                $this->$request->File->store('public/files');

                Alert::success('성공','저장이 완료되었습니다');
                return redirect()->back();
            }
        }*/

        $filename=str_random().filter_var($file->getClientOriginalName(),FILTER_SANITIZE_URL);

        if($request->file('File')->store('files'))
        {
            $file=\App\Attachment::create([
                'filename'=>$request->$filename,
                'bytes'=>$file->getSize(),
                'mime'=>$file->getClientMimeType(),
            ]);

            Alert::success('성공','저장이 완료되었습니다');
            return redirect()->back();
        }
        if(!$validator)
        {
            Alert::error('실패','지원하지 않는 확장자');
            return redirect()->back();
        }
        Alert::error('실패','저장실패');
        return redirect()->back();
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
