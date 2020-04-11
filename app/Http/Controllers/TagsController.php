<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Tag;
use Validator;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $all = Tag::all();  

        return view('tags.index' ,['all'=>$all] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tags.create');
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
            'tname'=>'required',
            
        ]);

            if($validation->fails()){
                return back()
                        ->with('erroes', $validation->errors())
                        ->withInput();
            }

        $tag = new Tag();
       
        $tag->tname=$request->tname;
        
        $tag->save();

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
        $updatetag= Tag::where('id', $id)
                         ->first();

        return view('tags.update', compact('updatetag'));
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
        $tag=Tag::find($id);
      
        $tag->tname=$request->tname;
       
        $tag->save();

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
        $categorie=Categorie::destroy($id);
        return redirect()->back();
    }
}
