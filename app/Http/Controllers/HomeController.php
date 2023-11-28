<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home()
    {
<<<<<<< HEAD
        $users = DB::table('users')
            ->leftJoin('posts', 'users.id', '=', 'posts.user_id')
            ->leftJoin('comments', 'posts.id', '=', 'comments.post_id')
            ->select('users.*', 'posts.*', 'comments.*')
            // ->select('users.id', 'users.name', 'users.email', 'posts.post_content', 'comments.comment_content')

            ->get();
            // dd($users);

            
        return view('posts', compact('users'));
=======
        $result = DB::table('users')
            ->select('*')
            ->addSelect('posts.*')
            ->addSelect('comments.*')
            ->leftJoin('posts', 'users.id', '=', 'posts.user_id')
            ->leftJoin('comments', 'posts.id', '=', 'comments.post_id')
            // ->where('users.id', '=', $userId)
            ->get();

            
        return view('home', compact('result'));
>>>>>>> b336812c9bf254e5ec7d1c26dcacd36303707f94
    }
}
