<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAnswerRequest extends BaseRequest
{

    public function rules(): array
    {
        return [
            // 'user_id' => 'required',
            'question_id' => 'required',
            'content' => 'required'
        ];
    }
}
