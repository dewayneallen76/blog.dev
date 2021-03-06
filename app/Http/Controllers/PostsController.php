<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Models\Post;
use App\Models\BaseModel;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\AuthController;

use Log;

class PostsController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $data['posts'] = Post::with('user')->orderBy('created_at', 'DESC')->paginate(6);

      if($request->has('search')) {
        $data['posts'] = Post::search($request->search)->paginate(6);
      }
      
      return view('/posts/index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('/posts/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, Post::$rules);

      $post = new Post();
      $post->created_by = $request->user()->id;
      $post->title = $request->title;
      $post->url = $request->url;
      $post->content = $request->content;
      $post->save();

      $request->session()->flash('successMessage', 'Post created successfully');

      Log::info("Post created " . $post);

      return redirect()->action('PostsController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $data['post'] = Post::find($id);

      if(!$data['post']) {
        Log::error("Post with id of $id not found");
        abort(404);
      }

      return view('posts/show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $data['post'] = Post::findOrFail($id);

      if(!$data['post']) {
        Log::error("Post with id of $id not found");
        abort(404);
      }

      return view('/posts/edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $post = Post::findOrFail($id);
      $post->title = $request->title;
      $post->url = $request->url;
      $post->content = $request->content;
      $post->created_by = 1;

      if(!$post) {
        Log::error("Post with id of $id not found");
        abort(404);
      }

      $post->save();

      $request->session()->flash('successMessage', 'Post updated successfully.');

      return redirect()->action('PostsController@show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
      $post = Post::find($id);

      if(!$post) {
        Log::error("Post with id of $id not found");
        abort(404);
      }

      $post->delete();

      $request->session()->flash('errorMessage', 'Post deleted');

      return redirect()->action('PostsController@index');
    }
}
