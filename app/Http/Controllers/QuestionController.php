<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuestionRequest;
use App\Http\Requests\UpdateQuestionRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    public function question(StoreQuestionRequest $request)
    {
        // dd($request->tag);
        $this->question->create([
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'question' => $request->question,
            'content' => $request->content,
        ]);
        $question = $this->question->latest('id')->where('user_id', auth()->user()->id)->first();
        foreach ($request->tag as $tag) {
            $this->questionTag->create([
                'question_id' => $question->id,
                'tag_id' => $tag,
            ]);
        }

        return redirect()->back();
    }

    public function myQuestions()
    {
        $questions = $this->question->where('user_id', auth()->user()->id)->with('user')->get();
        $tags = $this->tag->get();
        return view('user.pages.questions-user', compact('tags', 'questions'));
    }
    public function editQuestion($question)
    {
        $question = $this->question->find($question)->first();
        $tags =  $this->tag->get();
        $questions =  $this->question->get();
        return view('user.pages.question-edit', compact('tags', 'questions', 'question'));
    }
    public function updateQuestion(UpdateQuestionRequest $request, $question)
    {
        $question = $this->question->find($question)->first();
        $question->update($request->validated());
        return redirect()->back();
    }

    public function questionDetails($question)
    {
        $tags =  $this->tag->get();
        $question =  $this->question->find($question);
        $answers = $this->answer->where('question_id', $question->id)->get();
        return view('user.pages.question-details', compact('tags', 'question', 'answers'));
    }
}
