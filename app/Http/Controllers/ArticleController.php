<?php

namespace App\Http\Controllers;

use App\Enums\RoleEnum;
use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use App\Models\Community;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function index()
    {
        // dd(auth()->user()->id);
        $community = Community::where('user_id', auth()->user()->id)->first();
        // dd($community);
        // $users = User::get();
        $articles = Article::where('community_id', $community->id)->get();
        return view('administrator.pages.article', compact('articles'));
    }

    public function storeArticle(ArticleRequest $request)
    {
        // super_admin = 1
        // admin = 2
        // user = 0

        $community = Community::where('user_id', auth()->user()->id)->first();
        $article = Article::create([
            'community_id' => $community->id,
            'title' => $request->title,
            'content' => $request->content,
        ]);
        return redirect()->back()->with('success', 'Article successfully added');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function deleteArticle($article)
    {
        Article::find($article)->delete();
        return redirect()->back()->with('success', 'Article deleted');
    }
}
