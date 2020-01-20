<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AdminPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'post_title'    => 'required|min:3|max:100',
                'post_image'    => 'required|mimes:jpeg,jpg,png'
            ]);
        if ($validator->fails()){
            return $this->errorResponse($validator->errors()->first());
        }
        $post = new Post();
        $post->title = $request->input('post_title');
        if ($request->has('post_image')){
            $image = $request->file('post_image');
            //name = today_random(10)_name
            $name = today()->format('Y-m-d'). '_' . Str::random('10'). '_' .$image->getClientOriginalName();
            while (file_exists(storage_path('/app/public/posts'). $name)){
                $name = today()->format('Y-m-d'). Str::random('10'). '_' .$image->getClientOriginalName();
            }
            $image->move(storage_path('/app/public/posts'), $name);
            $post->image = $name;
        }else{
            $post->image = "";
        }
        $post->user_id = Auth::id();
        $post->save();
        $category = Category::find($request->input('post_category_id'));
        $post->categories()->attach($category);
        return $this->successResponse($post, 'Create Successful !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
    }
}
