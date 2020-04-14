<?php

namespace App\Http\Controllers;
use Validator;
use App\Role;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('login.index');
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

        //validation
        $validation = Validator::make($request->all(),[
            'bemail'=>'required | email',
            'bpass'=>'required'
        ]);

            if($validation->fails()){
                return back()
                        ->with('errors', $validation->errors())
                        ->withInput();
            }


        //all
        $find = Role::where('bemail', $request->bemail)
                ->where('bpass', $request->bpass)
                ->first();


                if($find != null){
                
                    if($find->type == 'admin'){
                         $request->session()->put('bname', $find->bname);
                         $request->session()->put('bemail', $find->bemail);
                         $request->session()->put('id', $find->id);

                         return redirect()->route('adash');
                    }else{
                        $request->session()->put('bname', $find->bname);
                         $request->session()->put('bemail', $find->bemail);
                         $request->session()->put('bpass', $find->bpass);
                         $request->session()->put('id', $find->id);

                         return redirect()->route('userdash');
                    }
                    
        
                }else{
                    $request->session()->flash('msg', 'invalid username/password');
                    return redirect()->route('blogin');
                }
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
