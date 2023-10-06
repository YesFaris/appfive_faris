<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admins extends Model
{
    use HasFactory;
    /**
     * The attribute that are mass assignable
     * @var mixed
     */
    protected $fillable = [
        'admin_name',
        'admin_surname',
        'admin_login',
        'admin_password',
        'isenabled'
    ];
}
