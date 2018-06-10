<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class scholarship extends Model
{
    protected $fillable = ['name','firm','description','applyOnline', 'image'];

    public function getImage()
    {
        if(!$this->image){
            return null;
        }
        return asset('/storage/'.$this->image);
    }  
}

