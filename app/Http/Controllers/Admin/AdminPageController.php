<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AdminPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Page::first();
        return view('admin.pages.list', compact('setting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $setting = Page::findOrFail($id);
        return view('admin.pages.edit', compact('setting'));
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
        dd($request->all());
        $validator = Validator::make($request->all(),
            [
                'page_name' => 'min:2'
            ]);
        if ($validator->fails()){
            return $this->errorResponse($validator->errors()->first());
        }
        $setting = Page::findOrFail($id);
        if ($request->hasFile('page_banner')){
            $image = $request->file('page_banner');
            //name = today_random(10)_name
            $name = today()->format('Y-m-d'). '_' . Str::random('10'). '_' .$image->getClientOriginalName();
            while (file_exists(storage_path('/app/public/pages/'). $name)){
                $name = today()->format('Y-m-d'). Str::random('10'). '_' .$image->getClientOriginalName();
            }
            $image->move(storage_path('/app/public/pages'), $name);
            $setting->banner = $name;
        }else{
            $setting->banner = "";
        }
        $setting->name = $request->input('page_name');
        $setting->address = $request->input('page_address');
        $setting->phone = $request->input('page_phone');
        $setting->email = $request->input('page_email');
        $setting->description = $request->input('page_description');
        $setting->save();
        return redirect()->back()->with('success', 'Update Successful !');
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
