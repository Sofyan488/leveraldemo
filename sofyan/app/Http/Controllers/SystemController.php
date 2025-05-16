<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SystemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $data['System'] = \App\Models\System::all();

         return $data;

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    $data['System'] = new \App\Models\System(); 
    $data['route'] = 'dataSystem.store'; 
    $data['method'] = 'post';
    #$data['titleForm'] = 'Form Input System'; 
    #$data['submitButton'] = 'Submit';
    #return view('System/form_System', $data); 

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'settings_id' => 'required',
        'site_name' => 'required', 
        'site_email' => 'required', 
        'items_per_page' => 'required', 
        'maintenance_mode' => 'required', 
    ]);

    $inputSystem = new \App\Models\System(); 
    $inputSystem->settings_id = $request->settings_id;
    $inputSystem->site_name = $request->site_name;  
    $inputSystem->site_email = $request->site_email;
    $inputSystem->items_per_page = $request->items_per_page;
    $inputSystem->maintenance_mode = $request->maintenance_mode;
    $inputSystem->save();

    return redirect('dataSystem'); 

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
