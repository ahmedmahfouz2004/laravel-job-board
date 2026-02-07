<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use function Pest\Laravel\get;

class ApiPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::select(['id','title','author'])->first();
        return response()->json([
           'status'=>'success',
           'data' => $posts
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        $data = $request->validated();

        $post = Post::create($data);

        return response()->json([
            'status' => 'success',
            'data'   => $post
        ]);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::find($id);

        if (!$post) {
            return response(
                ['message' => 'Post not found']
            );
        }

        return response()->json([
            'status' => 'success',
            'data' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request, string $id)
    {
        $data = $request->validated();
        $post = Post::find($id);

        if (!$post) {
            return response(
                ['message' => 'Post not found']
            );
        }
        $post->update($data);


//        $post = Post::where('id', '=', $id)->update($data);
        return response()->json([
            'status' => 'success',
            'data' => $post
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);
        if (!$post) {
            return response(
                ['message' => 'Post not found']
            );
        }
        $post->delete();
//        $post = Post::where('id', '=', $id)->delete();
        return response()->json([
            'status' => 'success Deletion',
            'data' => $post
        ]);
    }
}
