<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TestController extends Controller
{
    public function index()
    {
        // $user = User::create([
        //     'name' => 'Chandan',
        //     'email' => 'chandan@gmail.com',
        //     'password' => Hash::make('password')
        // ]);
        // // dd($user);
        // $post = Post::create([
        //     'user_id' => $user->id,
        //     'title' => 'New post here'
        // ]);

        // $post->comments()->create([
        //     'user_id' => $user->id,
        //     'body' => 'This is for Post comment'
        // ]);
        $video = Video::create([
            'title' => 'Example for video'
        ]);
        $video->comments()->create([
            'user_id' => 1,
            'body' => 'This is for video comment'
        ]);
        return view('welcome');
    }

    public function PostComment($id)
    {
        $post = Post::find($id);

        dd($post->comments);

    }
    public function VideoComment($id)
    {
        $video = Video::find($id);

        dd($video->comments);

    }
}
