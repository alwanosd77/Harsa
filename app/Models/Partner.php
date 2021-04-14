<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;

class Partner extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'url',
        'cover',
    ];

    public function project()
    {
        return $this->hasMany(Project::class);
    }
}
