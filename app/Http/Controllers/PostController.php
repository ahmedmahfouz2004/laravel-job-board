<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Post::latest()->Paginate(5);
        return view('post.index',['posts'=>$data , 'pageTitle'=>'Blog']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create' ,['pageTitle'=>'Blog - Create New Post']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        $data = $request->validated();
        $post = Post::create($data);
        return redirect()->route('post.index')->with('success','Post Created Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post =  Post::findOrFail($id);
        return view('post.show' , ['post'=>$post , 'pageTitle'=>$post->title]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
        return view('post.edit' ,['post' => $post,'pageTitle'=>'Blog - Edit Post: '. $post->title]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request, string $id)
    {
        $data = $request->validated();
        $post = Post::findOrFail($id);
        $post->update($data);
//        $post = Post::where('id' , "=" , $id)->update($data);
        return redirect()->route('post.index')->with('success','Post Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::where('id' , "=" , $id)->delete();
        return redirect()->route('post.index')->with('success','Post Deleted Successfully!');
    }
}
