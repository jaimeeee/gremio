<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Essence\Essence;

class ProjectImage extends Model
{
    public function getMediaAttribute()
    {
        if ($this->link) {
            $essence = new Essence;
            $media = $essence->extract($this->link);
            
            if ($media) {
                return $media;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    
    /**
     * Return's the CSS class depending on the property's int
     * 
     * @return String
     */
    public function getSizeClassAttribute()
    {
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
     * Return the image's project
     */
    public function project()
    {
        return $this->belongsTo('App\Project');
    }
}
