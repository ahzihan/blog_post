<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $posts=Post::orderBy('created_at','desc')->get();
        return view('pages.home',compact('posts'));

    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.add_post');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required | max:255',
            'details'=>'required',
        ]);

        // $file=$request->file('photo');
        // $photo=time().'_'.$file->getClientOriginalName();
        // $file->move('uploads',$photo);
        $d=array(
            'title'=>$request->title,
            'details'=>$request->details,
        );
        Post::create($d);
        return redirect()->route('home')->with('success','Post Inserted Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $list=Post::find($id);
        return view('pages.details',compact('list'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
