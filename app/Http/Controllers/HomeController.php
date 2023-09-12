<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $tag = $request->query('slug');
        if ($tag) {
            $tag = $this->tag->where('slug', $tag)->first();
            // dd($tag);
            $questions = $this->questionTag->where('tag_id', $tag->id)->orderBy('id', 'desc')->with('question')->get();
        } else {
            $questions =  $this->question->orderBy('id', 'desc')->get();
        }
        $tags = $this->tag->get();

        return view('user.pages.home', compact('tags', 'questions'));
    }

    public function questions(Request $request)
    {
        $tag = $request->query('slug');
        if ($tag) {
            $tag = $this->tag->where('slug', $tag)->first();
            // dd($tag);
            $questions = $this->questionTag->where('tag_id', $tag->id)->orderBy('id', 'desc')->with('question')->get();
        } else {
            $questions =  $this->question->orderBy('id', 'desc')->get();
        }
        $tags = $this->tag->get();
        return view('user.pages.questions', compact('tags', 'questions'));
    }

    public function ask()
    {
        $tags =  $this->tag->get();
        $questions =  $this->question->get();
        return view('user.pages.ask', compact('tags', 'questions'));
    }

    public function questionTag($tag = null)
    {
        $tags = $this->tag->get();
        $tag = $this->tag->where('slug', $tag)->first();
        $questions = $this->questionTag->where('tag_id', $tag->id)->with('question')->get();
        // dd($questions);
        return view('user.pages.home', compact('tags', 'questions'));
    }
}
