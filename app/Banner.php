<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    public function getSizeClassAttribute() {
        switch ($this->size) {
            case 1:
                return ' tall';
                break;
            
            case 2:
                return ' large';
                break;
            
            case 3:
                return ' tall large';
                break;
        }
    }
}
