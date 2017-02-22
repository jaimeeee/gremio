<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectTag extends Model
{
    /**
     * Return the projects with this tag
     */
    public function projects()
    {
        return $this->belongsToMany('App\Project', 'project_project_tag', 'project_id', 'project_tag_id');
    }
}
