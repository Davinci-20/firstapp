<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $post = Post::all();

        return view('home', compact('post'));

    }

    public function about()
    {
        return view('about');
    }

    public function create(Request $request)
    {

        $request->validate([
            'title' => 'required',
        ], [
            'title.required' => 'Hey bro, you need title',
        ]);

    }

}
