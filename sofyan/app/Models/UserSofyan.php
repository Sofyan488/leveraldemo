<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserSofyan extends Model
{
     use HasFactory;
    protected $table = 'user_Sofyan'; 
  
protected $fillable = [
        'user_id',
        'name',
        'email',
        'role',
        'status',
    ];



}
