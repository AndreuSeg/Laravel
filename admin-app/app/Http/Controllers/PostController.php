<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Events\PostReadedEvent;

class PostController extends Controller
{
    public function index() {
        $latestPost = Post::where('id', 1)->get();
        print_r($latestPost);

        /**
         * Lanazamos el evento y se puede comprobar en el log de laravel
         */
        // event(new PostReadedEvent($latestPost));
        // die();

        // Simulamos la creacion de un Post
        // Post::create([
        //     'user_id' => 1,
        //     'category_id' => 1,
        //     'tittle' => '',
        //     'slug' => '',
        //     'content' => '',
        // ]);

        return view('blog.index', [
            'posts' => $latestPost
        ]);
    }

    public function jsonFeed($format) {
        $latestPost = Post::orderBy('created_at', 'desc')->with('category', 'author')->limit(10)->get();
        /**
         * Esta es una manera
         * * return response()->json($latestPost);
         */

        /**
         * Esta es otra manera
         */
        $contentType = null;
        $respone = null;
        switch ($format) {
            case 'json':
                $respone = $latestPost->toJson();
                $contentType = 'application/json';
                break;
        }

        return response($respone)->header('content-type', $contentType);
    }

    public function find($uri) {

    }

    public function save(Request $request) {

    }

    public function delete($id) {

    }
}
