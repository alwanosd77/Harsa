<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    use Sluggable;
    protected $fillable = [
        'title',
        'slug',
        'shortText',
        'content',
        'cover',
    ];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
