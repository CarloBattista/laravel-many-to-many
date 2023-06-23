<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    use HasFactory;

    protected $table = 'technologies';

    protected $fillable = [
        'title_project',
        'description_project',
        'slug',
        'image',
        'project_image',
        'client',
        'type_id',
        'technology_id'
    ];

    public function projects(){
        return $this->belongsToMany( Project::class );
    }

}
