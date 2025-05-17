<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class System extends Model
{
    use HasFactory;
    protected $table = 'system_settings'; 
    protected $primaryKey = 'settings_id';
    public $timestamps = false;

}
