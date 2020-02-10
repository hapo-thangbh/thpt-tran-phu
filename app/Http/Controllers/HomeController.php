<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::with(['posts' => function($q) {
            $q->orderBy('created_at', 'desc')->take(5);
        }])->get();
        $newPosts = Post::orderBy('created_at', 'desc')->take(5)->get();
        $data = [
            'categories' => $categories,
            'newPosts' => $newPosts,
        ];
        return view('home', $data);
    }
}
