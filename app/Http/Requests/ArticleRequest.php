<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends BaseRequest
{

    public function rules(): array
    {
        return [
            'title' => 'required',
            'content' => 'required',
            // 'community_id' => 'required',
        ];
    }
}
