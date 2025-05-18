<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserSofyan;

class UserSofyanController extends Controller
{
    public function index()
    {
        return response()->json(UserSofyan::all());
    }

    public function store(Request $request)
    {
        $request->validate([
        'user_id' => 'required',
        'name' => 'required', 
        'email' => 'required', 
        'role' => 'required', 
        'status' => 'required', 
    ]);

    $inputUser = new \App\Models\UserSofyan(); 
    $inputUser->user_id = $request->user_id;
    $inputUser->name = $request->name;  
    $inputUser->email = $request->email;
    $inputUser->role = $request->role;
    $inputUser->status = $request->status;
    $inputUser->save();

    return redirect('dataUser'); 

    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'role' => 'required',
            'status' => 'required',
        ]);

        $user = UserSofyan::where('user_id', $id)->first();

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        $user->update($request->all());

        return response()->json(['message' => 'User updated successfully', 'data' => $user]);
    }

    public function destroy(string $id)
    {
        $user = UserSofyan::where('user_id', $id)->first();

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        $user->delete();

        return response()->json(['message' => 'User deleted successfully']);
    }
}
