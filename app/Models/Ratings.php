<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ratings extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'statut',
        'date_time_rate',
        'step_rate',
        'folder_id',
        'step_id',
        'admin_id'
    ];
}
