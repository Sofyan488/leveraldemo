<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserSofyanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
                $data['UserSofyan'] = \App\Models\UserSofyan::all();
                return $data;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['UserSofyan'] = new \App\Models\UserSofyan(); 
        $data['route'] = 'dataevent.store'; 
        $data['method'] = 'post';
        #$data['titleForm'] = 'Form Input UserSofyanController'; 
        #$data['submitButton'] = 'Submit';
        #return view('UserSofyanController/form_UserSofyanController', $data); 

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
        'user_id' => 'required',
        'name' => 'required', 
        'email' => 'required', 
        'role' => 'required', 
        'status' => 'required', 

    ]);

    $inputUserSofyanController = new \App\Models\Event(); 
    $inputUserSofyanController->user_id = $request->user_id;
    $inputUserSofyanController->name = $request->name;
    $inputUserSofyanController->email = $request->email;  
    $inputUserSofyanController->role= $request->role; 
    $inputUserSofyanController->status= $request->status; 

    $inputUserSofyanController->save();
    #return redirect('datauser'); 
    return response()->json(['message' => 'User added successfully']);

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
