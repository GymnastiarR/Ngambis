<?php

namespace App\Http\Controllers;

use App\Models\Option;
use App\Models\Question;
use Illuminate\Http\Request;
use App\Models\history;
use Illuminate\Support\Facades\Auth;

class UjianController extends Controller
{
    public function index($category, $time){
        $questions = Question::where('is_published', 1)->where('category', $category)->get()->random(10);
        $time = $time * 10;
        $minutes = floor($time/60);
        $second = $time%60;
        \session()->put('time', $time);
        return \view('ujian', [
            'questions' => $questions,
            'coutdown' => $minutes . ':' . $second,
        ]);
    }
    public function grade(Request $request){
        $request = \collect($request);
        $grade = 0;
        $questions = [];

        foreach($request as $key=>$value)
        {
            if($key == '_token'){
                continue;
            }


            $chosen = Option::find($value);
            $questions[] = Question::with('options')->find($key);


            if($chosen->is_true){
                $grade += 1;
            }
        }

        // history::create([
        //     'user_id' => Auth::user()->id,
        //     'grade' => $grade,
        //     'time' => 100,
        // ]);

        // \session()->remove('time');

        return \view('nilai', [
            'your_answare' => $chosen,
            'grade' => $grade,
            'questions' => $questions
        ]);
    }
    // public function UniqueRandomNumbersWithinRange($min, $max, $quantity) {
    //     $numbers = range($min, $max);
    //     shuffle($numbers);
    //     return array_slice($numbers, 0, $quantity);
    // }
}
