<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserSofyanController;
Route::resource('datauser', UserSofyanController::class);
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/dataAdmin', function () {
    return response()->json([
        'users' => 150,
        'active' => 120,
        'settings' => true,
    ]);
});


Route::get('/dataSettings', function () {
    return response()->json([
        'siteTitle' => 'Yaqub Admin',
        'adminEmail' => 'admin@Yaqub.com',
        'itemsPerPage' => 50,
        'maintenanceMode' => true,
    ]);
});

Route::post('/settings', function (Request $request) {
  
    return response()->json(['message' => 'Settings saved']);
});


Route::get('/datauser', function () {
    return response()->json([
        ['id' => 1, 'username' => 'Yaqub', 'email' => 'Yaqub@example.com', 'status' => 'Active', 'role' => 'Admin'],
        ['id' => 2, 'username' => 'amir', 'email' => 'amir@example.com', 'status' => 'Active', 'role' => 'User'],
        ['id' => 3, 'username' => 'Sofyan', 'email' => 'Sofyan@example.com', 'status' => 'active', 'role' => 'user'],
    ]);
});
