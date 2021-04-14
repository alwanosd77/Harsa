<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Models\Project;

class Employee extends Model
{
    use HasFactory;
    use Sluggable;
    protected $fillable = [
        'name',
        'position',
        'caption',
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

    public function project()
    {
        return $this->hasMany(Project::class);
    }
}
