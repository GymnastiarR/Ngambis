<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\history;

class DashboardController extends Controller
{
    public function index(){
        $jumlah = Question::where('user_id', Auth::user()->id)->count();
        $user = User::find(Auth::user());
        return \view('dashboard', [
            'point' => $user[0]->point,
            'jumlah' => $jumlah,
            'best_grade' => history::where('user_id', Auth::user()->id)->orderBy('grade', 'desc')->first(),
        ]);
    }
}
