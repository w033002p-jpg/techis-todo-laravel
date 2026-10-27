<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizeController extends Controller
{
    //テックアイエス！の表示
    public function index(){
        return view('question.quiz2');
    }
}

