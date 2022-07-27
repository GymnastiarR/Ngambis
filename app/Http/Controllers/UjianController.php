<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UjianController extends Controller
{
    public function index($category, $time){
        return \view('ujian');
    }
}
