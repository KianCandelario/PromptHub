<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function createPostPage() {
        return view('createpost');
    }

    public function createPost() {
        
    }
}
