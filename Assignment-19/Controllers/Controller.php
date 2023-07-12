<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function show($id)
{
    $post = Post::with('comments')->findOrFail($id);
    return view('posts.show', compact('post'));
}
}


