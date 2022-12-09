<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        $latestPost = Post::orderBy('created_at', 'desc')->with('category', 'author')->limit(10)->get();
        return view('blog.index', [
            'posts' => $latestPost
        ]);
    }
    public function find($uri) {

    }
    public function save(Request $request) {

    }
    public function delete($id) {

    }
}
