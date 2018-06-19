<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YmmceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "dljfks";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      // return redirect('/ymmce/create')->with('success', 'Post Created');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      /* $this->validate($request,[
          'title' => 'required',
          'body' => 'required',
          'cover_image' => 'image|nullable|max:1999'
      ]);
      //Handle File Upload
          if($request->hasFile('cover_image')){
              // Get filename with the extension
              $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
              // Get Just filename
              $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
              // Get Just Ext
              $extension = $request->file('cover_image')->getClientOriginalExtension();
              // File Name to Store
              $fileNameToStore= $filename.'_'.time().'.'.$extension;
              //Upload Image
              //this is the path for server
              //$path = $request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
             // this is the pathe for herouko
              $path = $request->file('cover_image')->move( 'cover_images' , $fileNameToStore);
          }else {
              $fileNameToStore = 'noimage.jpg';
          }

      // Create  Post
      $post = new Post;
      $post->title = $request->input('title');
      $post->body = $request->input('body');
      $post->user_id = auth()->user()->id;
      $post->cover_image = $fileNameToStore;
      $post->save();*/

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
