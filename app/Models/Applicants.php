<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicants extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'civility',
        'first_name',
        'last_name',
        'birth',
        'nationality',
        'identity_document',
        'document_number',
        'email',
        'adress',
        'city',
        'district',
        'phone',
        'phone2',
        'rules',
        'consent',
        'id_profil'
    ];
}
