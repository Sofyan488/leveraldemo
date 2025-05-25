<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class System extends Model
{
    protected $primaryKey = 'settings_id';
    use HasFactory;
    protected $table = 'system_settings'; 
}
