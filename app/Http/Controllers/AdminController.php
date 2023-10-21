<?php

namespace App\Http\Controllers;

use App\Enums\RoleEnum;
use App\Http\Requests\ArticleRequest;
use App\Http\Requests\CommunityRequest;
use App\Models\Community;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function index()
    {
        return view('administrator.pages.dashboard');
    }

    public function users()
    {
        $users = User::where('role', RoleEnum::USER)->get();
        return view('administrator.pages.users', compact('users'));
    }

    public function community()
    {
        $users = User::get();
        $communities = Community::get();

        return view('administrator.pages.community', compact('users', 'communities'));
    }

    public function storeCommunity(CommunityRequest $request)
    {
        $user = User::find($request->user_id);
        DB::transaction(function () use ($request, $user) {
            // dd($user);
            $this->updatePosition($user);

            Community::create([
                'user_id' => $request->user_id,
                'title' => $request->title,
                'slug' => Str::slug($request->title),
            ]);
            // $user->update([
            //     'position' => 2
            // ]);

        });

        return redirect()->back()->with('success', 'Community successfully added');
    }

    public function updatePosition($user)
    {
        // dd($user);
        $user->update([
            'position' => '2'
        ]);
    }

    public function deleteCommunity($community)
    {
        Community::find($community)->delete();
        return redirect()->back()->with('success', 'Community deleted');
    }
}
