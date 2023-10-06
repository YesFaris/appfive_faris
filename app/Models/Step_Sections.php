<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Step_Sections extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'section_name',
        'survey_id'
    ];
}
