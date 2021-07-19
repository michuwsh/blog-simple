<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Posts::paginate(10);
        return view('blog.index', compact('posts'));
    }

    public function show(Posts $post)
    {
        $comments = DB::table('comments')
                ->where('post_id', $post->id)
                ->orderByDesc('created_at')
                ->limit(10)
                ->get();

        return view('blog.post', compact('post', 'comments'));

    }
}
