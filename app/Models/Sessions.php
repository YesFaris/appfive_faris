<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sessions extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'quota',
        'session_date',
        'session_time',
        'admin_id',
        'test_step_id'
    ];
}
