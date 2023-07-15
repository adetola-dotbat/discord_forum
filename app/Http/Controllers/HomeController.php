<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $tags = $this->tag->get();
        $questions =  $this->question->get();
        return view('user.pages.home', compact('tags', 'questions'));
    }

    public function questions($slug = null)
    {
        $tags =  $this->tag->get();
        $questions =  $this->question->get();
        return view('user.pages.questions', compact('tags', 'questions'));
    }

    public function ask()
    {
        $tags =  $this->tag->get();
        $questions =  $this->question->get();
        return view('user.pages.ask', compact('tags', 'questions'));
    }
}
