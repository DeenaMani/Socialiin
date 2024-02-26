<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    protected $fillable = [
        'category_id',
        'project_title',
        'project_sub_title',
        'project_short_description',
        'project_full_description',
        'project_image',
        'status',
    ];
}
