<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function postData(Request $request)
    {
        $input = $request->all();

        Post::create($input);

        dd('Post created successfully.');
    }
}
