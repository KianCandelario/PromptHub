<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function createPostPage() {
        return view('templates.createpost');
    }

    public function createPost() {
        
    }
}
