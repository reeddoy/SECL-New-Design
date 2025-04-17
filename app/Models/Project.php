<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name',
        'client_name',
        'location',
        'start_date',
        'end_date',
        'old_image',
        'new_image',
        'description',
        'project_category_id',
        'image1',
        'image2',
        'image3',
        'image4',
        'image5',
        'image6'
    ];

    public function projectCategory()
    {
        return $this->belongsTo(ProjectCategory::class);
    }
}
