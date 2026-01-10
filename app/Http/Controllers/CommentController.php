<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    function index()
    {
        $data = Comment::all();
        return view('comment.index',['comments'=>$data , 'pageTitle'=>'Blog']);
    }

    function create()
    {
//        Comment::create([
//            'content'=>'This Is My Fourth Comment',
//            'author'=>'Mahfouz',
//            'post_id'=> 4
//        ]);
        Comment::factory(5)->create();
        return redirect('/comments');
    }
}
