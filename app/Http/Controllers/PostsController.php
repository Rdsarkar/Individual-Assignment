<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Categorie;
use App\Tag;
use App\Post;
use Validator;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $all = Post::all(); 
        return view('posts.index',['all'=>$all]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $all = Categorie::all(); 
        $allt = Tag::all(); 

        return view('posts.create',compact('all','allt'));
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
        $validation = Validator::make($request->all(),[
            'pname'=>'required',
            'cname'=>'required',
            'tname'=>'required'
        ]);

            if($validation->fails()){
                return back()
                        ->with('errors', $validation->errors())
                        ->withInput();
            }


        $post = new Post();
        
       
        $post->pname=$request->pname;
        $post->cname=$request->cname;
        $post->tname=$request->tname;
        
        $post->save();

        return redirect()->back();
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
        $all = Categorie::all();
         $allt = Tag::all(); 
        $updatepost= Post::where('id', $id)
                             ->first();
        return view('posts.update', compact('updatepost','all','allt'));
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

        $validation = Validator::make($request->all(),[
            'pname'=>'required',
            'cname'=>'required',
            'tname'=>'required'
        ]);

            if($validation->fails()){
                return back()
                        ->with('errors', $validation->errors())
                        ->withInput();
            }



        $post=Post::find($id);

      
        $post->pname=$request->pname;
        $post->cname=$request->cname;
        $post->tname=$request->tname;
        
        $post->save();

       return redirect()->back();
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
