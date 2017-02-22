<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectCategory extends Model
{
    /**
     * Return the projects with this category
     */
    public function projects()
    {
        return $this->hasMany('App\Project');
    }
}
