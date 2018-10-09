<?php

namespace App\Http\Controllers;


use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home')
            ->with('posts', Post::where('user_id', Auth::user()->user_id)->get())
            ->with('user',  Auth::User());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create-post')
            ->with('posts', Post::where('user_id', Auth::user()->user_id)->get())
            ->with('user', $user = Auth::User());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'title'=> 'required',
            'description'=>'required',
            'post_icon' => 'required'
        ]);

//        instance of post
        $post = new Post();

        if ($request->file('post_icon')) {

            $file = $request->file('post_icon');

            //  create post
            Post::create([
                'user_id' => Auth::user()->user_id,
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'post_icon' =>  Auth::user()->user_id. "." . $file->getClientOriginalExtension()
            ]);

            //Move Uploaded post_icons
            $destinationPath = 'storage/post_icons';
            $file->move($destinationPath,  Auth::user()->user_id.".". $file->getClientOriginalExtension());


            return redirect()->route('post.index')
                ->with('success', 'Post Created');
        } else {
            return redirect()->back()->withErrors('danger', 'Something isn\'t Right');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog $blog
     * @return \Illuminate\Http\Response
     */
    public function show($post)
    {


    $current_post = Post::where("id",$post)->first();

        return view('posts.show-post')
            ->with('post', $current_post)
            ->with('posts', Post::where('user_id', Auth::user()->user_id)->get())
            ->with('user', Auth::User());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($post)
    {
        $current_post = Post::where("id",$post)->first();

        return view('posts.edit-post')
            ->with('post', $current_post)
            ->with('posts', Post::where('user_id', Auth::user()->user_id)->get())
            ->with('user', Auth::User());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Blog $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$post)
    {
        $this->validate($request,[
            'title'=> 'required',
            'description'=>'required',
            'post_icon' => 'required'
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
