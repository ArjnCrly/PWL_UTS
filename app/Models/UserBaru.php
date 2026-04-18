<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserBaru extends Model
{
    protected $table = 'm_user'; 
    protected $primaryKey = 'user_id';
    protected $guarded = []; 
}
