<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($id, Request $request)
    {
//        $category = Category::with('posts', 'posts.user')->findOrFail($id);
//        $posts = $category->posts()->paginate(config('app.paginate'));
//        $data = [
//            'category' => $category,
//            'posts' => $posts
//        ];
        if ($request->ajax()) {
            $response= [
                'view' => view('includes.category_post')->render()
            ];
            return response()->json($response);
        }
        return view('category');
    }
}
