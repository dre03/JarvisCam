<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $result = Post::all();
        return view('index', ['posts' => $result]);
    }

    public function create() {
        return view('create');
    }
    
    public function store(Request $request){
        $data = [
            'title' => $request->title,
            'body' => $request->body
            
        ];
        $create = Post::create($data);
        if($create){
            return redirect('/');
        }


    }

    public function edit($id) {
        $result = Post::find($id);
        return view('edit', ['post' => $result]);
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);
      
        $post = Post::find($id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->update();
        return redirect('/');
    }

    public function show($id) {
        $result = Post::find($id);
        return view('detail', ['post' => $result]);
    }

    public function destroy($id){
        Post::destroy($id);
        return redirect('/');
    }

}
