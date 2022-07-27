<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class UjianController extends Controller
{
    public function index($category, $time){
        $questions = Question::where('is_published', 1)->where('category', $category)->get()->random(10);
        $time = $time * 10;
        $minutes = floor($time/60);
        $second = $time%60;
        return \view('ujian', [
            'questions' => $questions,
            'coutdown' => $minutes . ':' . $second,
        ]);
    }
    // public function UniqueRandomNumbersWithinRange($min, $max, $quantity) {
    //     $numbers = range($min, $max);
    //     shuffle($numbers);
    //     return array_slice($numbers, 0, $quantity);
    // }
}
