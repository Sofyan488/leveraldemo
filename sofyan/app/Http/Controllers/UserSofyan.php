<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserSofyan;

class UserSofyan extends Controller
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
            'email' => 'required|email',
            'role' => 'required',
            'status' => 'required',
        ]);

        $user = UserSofyan::create($request->all());

        return response()->json([
            'message' => 'User created successfully',
            'data' => $user
        ], 201);
    }

    public function show(string $id)
    {
        $user = UserSofyan::where('user_id', $id)->first();

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        return response()->json($user);
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

        return response()->json([
            'message' => 'User updated successfully',
            'data' => $user
        ]);
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
