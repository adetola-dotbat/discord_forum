<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAnswerRequest;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function answer(StoreAnswerRequest $request)
    {
        $this->answer->create([
            'user_id' => auth()->user()->id,
            'question_id' => $request->question_id,
            'content' => $request->content
        ]);
        return redirect()->back();
    }
}
