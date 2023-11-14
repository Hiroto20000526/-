<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function create(Post $post)
    {
        return view('comments/create')->with(['post' => $post]);
    }
    
    public function store(Request $request, Comment $comment)
    {
        $comment->body=$request['body'];
        $comment->post_id=$request['post_id'];
        $comment->user_id=\Auth::id();
        $comment->save();
        return redirect('/posts/' . $comment->post_id);
    }
    
    public function show(Comment $comment)
    {
        return view('comments/show')->with(['comment' => $comment]);
    }
}