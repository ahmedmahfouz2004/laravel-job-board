<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $data = Comment::all();
        return view('comment.index',['comments'=>$data , 'pageTitle'=>'Blog']);
    }

    public function create()
    {
        return view('comment.create',['pageTitle'=>'Blog - Create New Comment']);
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        $comment =  Comment::findOrFail($id);
        return view('comment.show' , ['comment'=>$comment , 'pageTitle'=>$comment->title]);
    }

    public function edit(string $id)
    {
        return view('comment.edit' ,['pageTitle'=>'Blog - Edit Comment']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
