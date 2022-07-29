<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Http\Requests\StoreQuestionRequest;
use App\Http\Requests\UpdateQuestionRequest;
use App\Models\Option;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Question::where('user_id', Auth::user()->id);
        return \view('soal', [
            'questions' => Question::where('user_id', Auth::user()->id)->latest()->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return \view('new-survei');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreQuestionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuestionRequest $request)
    {
        // $request->validate();
        // return $request->is_published;
        // return $request->all();
        $question = Question::create([
            'body' => $request->question,
            'user_id' => 1,
            'is_published' => $request->is_published,
            'category' => $request->category,
        ]);

        if($request->is_published){
            $user = User::find(Auth::user()->id);
            $user->point = $user->point + 10;
            $user->save();
        }

        // return ($request->is_true == 'opsi_satu') ? 1 : 0;

        Option::create([
            'question_id' => $question->id,
            'body' => $request->opsi_satu,
            'is_true' => ($request->is_true == 'opsi_satu') ? 1 : 0 ,
        ]);
        Option::create([
            'question_id' => $question->id,
            'body' => $request->opsi_dua,
            'is_true' => ($request->is_true == 'opsi_dua') ? 1 : 0 ,
        ]);
        Option::create([
            'question_id' => $question->id,
            'body' => $request->opsi_tiga,
            'is_true' => ($request->is_true == 'opsi_tiga') ? 1 : 0 ,
        ]);
        Option::create([
            'question_id' => $question->id,
            'body' => $request->opsi_empat,
            'is_true' => ($request->is_true == 'opsi_empat') ? 1 : 0 ,
        ]);
        Option::create([
            'question_id' => $question->id,
            'body' => $request->opsi_lima,
            'is_true' => ($request->is_true == 'opsi_empat') ? 1 : 0 ,
        ]);

        return \redirect()->intended('soal')->with('success', 'Soal Berhasil Dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        // dd(Auth::user()->id . $question->user_id);
        if(($question->user_id != Auth::user()->id)){
            return \redirect('dashboard');
        }
        return \view('edit', [
            'question' => $question,
            'options' => $question->options,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuestionRequest  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuestionRequest $request, Question $question)
    {
        $request->validate([
            'body' => 'min:3,'
        ]);

        if($request->is_published){
            $question->update([
                'is_published' => 1,
            ]);
        }

        $question->update([
            'body' => $request->question,
            'category' => $request->category,
        ]);


        foreach($question->options as $option){
            $option->update(['is_true' => 0]);
            if($option->id == $request->is_true){
                $option->update(['is_true' => 1]);
            }
            $option->body = $request['opsi_'.$option->id];
            $option->save();
        }

        if(!($request->is_published)){
            return \redirect()->intended('soal')->with('update_success', 'Soal Berhasil Diperbarui');
        }

        return \redirect()->intended('soal')->with('publish_success', 'Soal Berhasil Dipublish');

        // $question->options->where('is_true', 1)->update(['is_true', 0]);
        // $question->options->find($request->is_true)->update(['is_true', 1]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        Question::destroy($question->id);
        // $question->delete();
        // $question->save();
        return \redirect()->intended('soal');
    }
}
