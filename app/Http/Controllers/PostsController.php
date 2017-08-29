<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data['posts'] =  \App\Models\Post::paginate(6);
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
      $this->validate($request, \App\Models\Post::$rules);

      $post = new \App\Models\Post();
      $post->created_by = 1;
      $post->title = $request->title;
      $post->url = $request->url;
      $post->content = $request->content;
      $post->save();

      $request->session()->flash('successMessage', 'Post created successfully');

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
      $data['post'] = \App\Models\Post::find($id);

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
      $data['post'] = \App\Models\Post::find($id);
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
      $post = \App\Models\Post::find($id);
      $post->title = $request->title;
      $post->url = $request->url;
      $post->content = $request->content;
      $post->created_by = 1;

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
      $post = \App\Models\Post::find($id);
      $post->delete();

      $request->session()->flash('errorMessage', 'Post deleted');

      return redirect()->action('PostsController@index');
    }
}
