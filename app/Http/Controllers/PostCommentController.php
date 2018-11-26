<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class PostCommentController extends Controller
{
    public function store(Request $request, Post $post)
    {
    	Comment::create([
    		'post_id' => $post->id,
    		'user_id' => auth()->id(),
    		'message' => $request->message,
    	]);
    	return redirect()->back();
    }
}
