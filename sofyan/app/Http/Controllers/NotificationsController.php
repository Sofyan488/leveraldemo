<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['System'] = \App\Models\Notifications::all();

         return $data;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    $data['Notifications'] = new \App\Models\Notifications(); 
    $data['route'] = 'dataNotifications.store'; 
    $data['method'] = 'post';
    #$data['titleForm'] = 'Form Input Notifications'; 
    #$data['submitButton'] = 'Submit';
    #return view('Notifications/form_Notifications', $data);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'notification_id' => 'required',
        'message' => 'required', 
        'date' => 'required', 
        'created_at' => 'required', 
        'updated_at' => 'required', 
    ]);

    $inputNotifications = new \App\Models\Event(); 
    $inputNotifications->name = $request->name;
    $inputNotifications->event_date = $request->event_date;  
    $inputNotifications->event_topic = $request->event_topic; 
    $inputNotifications->save();
    return redirect('dataNotifications/create'); 

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
