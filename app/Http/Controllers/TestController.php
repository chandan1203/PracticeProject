<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\User;
use App\Models\Video;
use App\Models\Project;
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
        // $video = Video::create([
        //     'title' => 'Example for video'
        // ]);
        // $video->comments()->create([
        //     'user_id' => 1,
        //     'body' => 'This is for video comment'
        // ]);
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

    public function project()
    {
        // $project = Project::create([
        //     'title' => 'First project title'
        // ]);

        // $user1 = User::create([
        //     'name' => 'Chandan',
        //     'email' => 'chandan@gmail.com',
        //     'password' => Hash::make('Chandan1234'),
        //     'project_id' => $project->id
        // ]);
        // $user2 = User::create([
        //     'name' => 'Chandan2',
        //     'email' => 'chandan2@gmail.com',
        //     'password' => Hash::make('Chandan1234'),
        //     'project_id' => $project->id,
        //     'project_id' => $project->id
        // ]);

        // $user1->tasks()->create([
        //     'title' => 'First user task',
        //     'user_id' => 1
        // ]);

        // $user1->tasks()->create([
        //     'title' => 'First user another task',
        //     'user_id' => 1
        // ]);

        // $user2->tasks()->create([
        //     'title' => 'Second user task',
        //     'user_id' => 2
        // ]);

        // $user2->tasks()->create([
        //     'title' => 'Second user another task',
        //     'user_id' => 2
        // ]);

        $project = Project::find(6);
        dd($project->tasks);

        return 'Success';
    }
}
