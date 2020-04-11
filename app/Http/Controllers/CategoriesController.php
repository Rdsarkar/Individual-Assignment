<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Categorie;
use Validator;



class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $all = Categorie::all();  

        return view('categories.index' ,['all'=>$all] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('categories.create');
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
            'cname'=>'required',
            
        ]);

            if($validation->fails()){
                return back()
                        ->with('erroes', $validation->errors())
                        ->withInput();
            }

        $categorie = new Categorie();

       
        $categorie->cname=$request->cname;
        
        $categorie->save();

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
        $updatecat= Categorie::where('id', $id)
                             ->first();
        return view('categories.update', compact('updatecat'));
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

        $categorie=Categorie::find($id);

      
        $categorie->cname=$request->cname;
       
        $categorie->save();

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
