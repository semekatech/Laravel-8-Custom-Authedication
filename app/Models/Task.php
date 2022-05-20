<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Task extends Model
{
 protected $table = 'tasks';
    public function user()
    {
    	return $this->belongsTo('User',id);
    }
}
