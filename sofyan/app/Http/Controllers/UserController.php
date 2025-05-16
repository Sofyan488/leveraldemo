<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $data['userController'] = \App\Models\userController::all();

        return $data;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    //post
    $data['user'] = new \App\Models\user(); 
    $data['route'] = 'datauser.store'; 
    $data['method'] = 'post';
    #$data['titleForm'] = 'Form Input user'; 
    #$data['submitButton'] = 'Submit';
    #return view('user/form_user', $data); 

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //localstorage
         $request->validate([
        'user_id' => 'required',
        'name' => 'required',
        'email' => 'required', 
        'role' => 'required', 
        'status' => 'required', 
        
    ]);

    $inputuser = new \App\Models\Event(); 
    $inputuser->user_id = $request->user_id;
    $inputuser->name = $request->name;
    $inputuser->email = $request->email;  
    $inputuser->role = $request->role;
    $inputuser->status = $request->status;
   
    $inputuser->save();
    return redirect('datauser'); 

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //patch
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //delete
    }
}
