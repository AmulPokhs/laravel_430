<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use File;

class BlogController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = new Blog();
        $data = $blog->get();
        return view('about-us')->with('blog_list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function storeData(Request $request)
    {

        dd($request);
    }
    public function store(Request $request)
    {

        $blog = new Blog();
        $rules =$blog->getAddRules();

        $request->validate($rules);
        $data = $request->all();
         if($request->image)
         {
             $path = public_path().'/uploads/image';
             if(!File::exists($path)) {
                 File::makeDirectory($path, 077, true, true);
             }
                 $file_name = "Image-".date('Ymdhis').rand(0,99).".".$request->image->getClientOriginalExtension();
                 $success = $request->image->move($path,$file_name);
                 if($success)
                 {
                     $data['image'] = $file_name;
                 }
                 else{
                     $data['image'] = null;
                 }
             }





         $blog->fill($data);

         $success = $blog->save();

    return redirect()->route('blog.index');
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
