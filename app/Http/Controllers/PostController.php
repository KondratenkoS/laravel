<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show()
    {
        $posts = DB::table('posts')->get();
        $data = json_decode(json_encode($posts), true);

        return view('post_QB.post_QB', [
            'posts' => $posts,
        ]);
    }
}
