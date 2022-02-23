<?php

namespace App\Http\Controllers;

use App\Models\Article;

class BlogController
{
    Public function show()
    {
        return view('blog', ['articles' => Article::latest()->get()]);
    }
}
