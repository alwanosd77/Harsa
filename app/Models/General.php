<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class General extends Model
{
    use HasFactory;
    protected $fillable = [
        'phone',
        'whatsapp',
        'gmaps',
        'address',
        'fax',
        'facebook',
        'twitter',
        'instagram',
        'youtube',
        'linkedin',
        'email',
        'quote',
    ];
}
