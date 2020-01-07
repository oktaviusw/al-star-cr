<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'posts' => Post::orderBy('created_at', 'desc')->where('active', true)->paginate(10),
        );

        return view('pages.post.list')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array(
            'breadcrumbs' => array(
                array(
                    'text' => 'Post',
                    'url' => '/posts',
                ),
                array(
                    'text' => 'Create New Post',
                    'url' => '',
                ),
            ),
            'title' => 'Create New Post',
            'type' => 'add', //add / edit
            'form_config' => array(
                'action' => 'PostsController@store',
                'method' => 'POST',
            ),
            'form_data' => array(
                'id' => '',
                'title' => '',
                'body' => '',
            ),
        );

        return view('pages.post.form')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(
            $request,
            array(
                'title' => 'required',
                'body' => 'required',
            )
        );

        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        return redirect('/posts')->with('success', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        $data = array(
            'breadcrumbs' => array(
                array(
                    'text' => 'Post',
                    'url' => '/posts',
                ),
                array(
                    'text' => $post->title,
                    'url' => '',
                ),
            ),
            'post' => Post::find($id),
        );

        return view('pages.post.single_details')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

        $data = array(
            'breadcrumbs' => array(
                array(
                    'text' => 'Post',
                    'url' => '/posts',
                ),
                array(
                    'text' => 'Edit Post',
                    'url' => '',
                ),
            ),
            'title' => 'Edit Post',
            'type' => 'edit', //add / edit
            'form_config' => array(
                'action' => ['PostsController@update', $post->id],
                'method' => 'PUT',
            ),
            'form_data' => array(
                'id' => $post->id,
                'title' => $post->title,
                'body' => $post->body,
            ),
        );

        return view('pages.post.form')->with($data);
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
        $this->validate(
            $request,
            array(
                'title' => 'required',
                'body' => 'required',
            )
        );

        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        return redirect('/posts')->with('success', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post = Post::find($id);
        $post->active = false;
        $post->save();

        return redirect('/posts')->with('success', 'Post Removed');
    }
}
