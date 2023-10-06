<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class test_steps extends Model
{
    use HasFactory;
    protected $fillable = [
        'uuid',
        'step_name',
        'step_section_id'
    ];
}
