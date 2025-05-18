<?php

use Illuminate\Support\Facades\Route;

#use App\Http\Controllers\UserSofyanController;

use App\Http\Controllers\SystemController;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\NotificationsController;

Route::resource('dataNotifications', NotificationsController::class); 


Route::resource('dataAdmin', AdminController::class); 

Route::resource('dataSystem', SystemController::class);

#Route::resource('dataUser', UserSofyaanController::class);




Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
