<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function createPostPage() {
        return view('templates.createpost');
    }

    public function createPost(Request $request) {
        $incomingFields = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'body' => 'required',
            'image' => 'nullable|mimes:png,jpg, jpeg, webp'
        ]);

        if ($request->has('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;

            $path = 'uploads/posts';
            $file->move(public_path($path), $filename);
            $incomingFields['image'] = $path.$filename;
        } else {
            $incomingFields['image'] = null;
        }

        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['description'] = strip_tags($incomingFields['description']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);
        $incomingFields['user_id'] = auth()->id();
        Post::create($incomingFields);

        return redirect()->intended('/create-post');
    }
}
