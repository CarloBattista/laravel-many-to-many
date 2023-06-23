<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    protected $fillable = [
        'title_project',
        'description_project',
        'slug',
        'image',
        'project_image',
        'client',
        'type_id'
    ];

    public function type(){
        return $this->belongsTo( Type::class );
    }

    public function technologies(){
        return $this->belongsToMany( Technology::class );
    }

}