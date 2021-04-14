<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Models\Employee;
use App\Models\Partner;

class Project extends Model
{
    use HasFactory;
    use Sluggable;
    protected $table = 'projects';
    protected $fillable = [
        'name',
        'slug',
        'description',
        'cover',
        'partner_id',
        'employee_id',
    ];

    protected $dates = ['completed_at'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function partner()
    {
        return $this->belongsTo(Partner::class);
    }
}
