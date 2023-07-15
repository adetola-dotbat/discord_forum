<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreQuestionRequest extends BaseRequest
{

    public function rules(): array
    {
        return [
            'user_id' => auth()->user(),
            'title' => 'required',
            'question' => 'required',
            'content' => 'required',
            'tag' => 'required',
        ];
    }
}
