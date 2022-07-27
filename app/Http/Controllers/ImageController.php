<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class ImageController extends Controller
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
        if($request->hasFile('upload')){
            $file = $request->file('upload');
            $originName = $file->hashName();
            $fileName = \pathinfo($originName, \PATHINFO_FILENAME);
            $extension = $file->extension();
            $fileName = $fileName . '_' . '.' . $extension;

            $request->file('upload')->move(\public_path('media'), $fileName);

            $url = \asset('media/'.$fileName);

            // $image = $request->file('upload')->store('images');

            return \response()->json(['fileName' => $fileName, 'uploaded' => 1 ,'url' => $url]);
            }

        // $question = new Question();
        // $question->id = 1;
        // $question->exists = true;
        // $image = $question->addMediaFromRequest('upload')->toMediaCollection('images');

        // // \var_dump($image->getUrl());

        // return \response()->json([
        //     'url' => $image
        // ]);

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
