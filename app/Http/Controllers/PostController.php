<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function updatePost(Post $post, Request $request) {
        if (auth()->user()->id !== $post['user_id']) {
            return redirect()->intended('/posts');
        }

        $incomingFields = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'body' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,webp'
        ]);

        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['description'] = strip_tags($incomingFields['description']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            // Delete previous image if exists
            if ($post->image) {
                Storage::delete($post->image);
            }

            // Generate a unique filename for the uploaded image
            $filename = time() . '.' . $request->file('image')->getClientOriginalExtension();

            // Store the uploaded image with the desired filename
            $imagePath = $request->file('image')->storeAs('uploads/posts', $filename);

            // Move the uploaded file to the desired public directory
            $request->file('image')->move(public_path('uploads/posts'), $filename);

            // Save the image path to the incoming fields
            $incomingFields['image'] = 'uploads/posts/' . $filename;
        }

        $post->update($incomingFields);

        return redirect()->intended("posts/{$post->id}");
    }

    public function deletePost(Post $post) {
        if (auth()->user()->id === $post['user_id']) {
            $post->delete();
        }

        return redirect()->intended("/posts");
    }

    public function createPostPage() {
        return view('templates.createpost');
    }

    public function viewPosts() {
        $posts = Post::where('user_id', auth()->id())->with('user')->get();
        $user = User::find(auth()->id());
        return view('templates.posts', ['posts' => $posts, 'user' => $user]);
    }

    public function editPage(Post $post) {
        if (auth()->user()->id !== $post['user_id']) {
            return redirect()->intended('/posts');
        }

        return view('posts.edit', ['post' => $post]);
    }


    public function show(Post $post) {
        return view('posts.show', ['post' => $post]);
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

            $path = 'uploads/posts/';
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

        return redirect()->intended('/posts');
    }
}
