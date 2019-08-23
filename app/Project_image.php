<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class project_Image extends Model
{
    public function project()
    {
        return $this->belongTo('App\Project_image');
    }
    
}
