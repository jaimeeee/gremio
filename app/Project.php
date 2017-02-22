<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * Return's the CSS class depending on the property's int
     * 
     * @return String
     */
    public function getSizeClassAttribute() {
        switch ($this->size) {
            case 1:
                return ' tall';
                break;
            
            case 2:
                return ' large';
                break;
            
            case 3:
                return ' big';
                break;
        }
    }
    
    /**
     * Return's the panel HTML link code.
     * 
     * @return String
     */
    public function getPanelLinkAttribute()
    {
        return '<a href="'.url('proyectos/'.$this->url).'" target="_blank"><i class="fa fa-link" aria-hidden="true"></i> Ver Proyecto</a>';
    }
    
    /**
     * Return the tag for this project
     */
    public function category()
    {
        return $this->belongsTo('App\ProjectCategory', 'project_category_id', 'id');
    }
    
    /**
     * Return the project's images
     */
    public function images()
    {
        return $this->hasMany('App\ProjectImage');
    }
    
    /**
     * Return the tags for this project
     */
    public function tags()
    {
        return $this->belongsToMany('App\ProjectTag', 'project_project_tag', 'project_id', 'project_tag_id');
    }
}
