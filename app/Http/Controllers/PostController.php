<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
    public function show($slug)
    {
        $post = \DB::table('posts')->where('slug', $slug)->first();

        if (! $post) {
            abort(404);
        }

        return view('post', [
            'post' => $post]);
    }
}
