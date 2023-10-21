<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommunityRequest extends BaseRequest
{

    public function rules(): array
    {
        return [
            'user_id' => 'required',
            'title' => 'required',
        ];
    }
}
