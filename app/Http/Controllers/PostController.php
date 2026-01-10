<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function index()
    {
        $data = Post::Paginate(5);
        return view('post.index',['posts'=>$data , 'pageTitle'=>'Blog']);
    }

    function show($id)
    {
        $post =  Post::findOrFail($id);
        return view('post.show' , ['post'=>$post , 'pageTitle'=>$post->title]);
    }
    function create()
    {
//        Post::create([
//            'title'=>'This Is My Post',
//            'body'=>'This To Test Find ',
//            'author'=>'Ahmed',
//            'published'=>true
//        ]);
        Post::factory(10)->create();
        return redirect('/blog');
    }

    function delete()
    {
        Post::destroy(5);
    }
}
