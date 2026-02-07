<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $data = Tag::all();
        return view('tag.index',['tags'=>$data , 'pageTitle'=>'Blog']);
    }

    public function create()
    {
        return view('tag.create',['pageTitle'=>'Blog - Create New Tag']);
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        $tag =  Tag::findOrFail($id);
        return view('tag.show' , ['tag'=>$tag , 'pageTitle'=>$tag->title]);
    }

    public function edit(string $id)
    {
        return view('tag.edit' ,['pageTitle'=>'Blog - Edit tag']);
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
