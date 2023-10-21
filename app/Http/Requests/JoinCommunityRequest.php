<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JoinCommunityRequest extends BaseRequest
{

    public function rules(): array
    {
        return [
            'community_id' => 'required',
            'user_id' => 'required',
        ];
    }
}
