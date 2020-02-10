<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($id, Request $request)
    {
        $category = Category::with('posts', 'posts.user')->findOrFail($id);
        $posts = $category->posts()->orderBy('created_at', 'desc')->paginate(config('app.paginate'));
        $data = [
            'category' => $category,
            'posts' => $posts
        ];
        return view('category', $data);
    }
}
