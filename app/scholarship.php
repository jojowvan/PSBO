<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class scholarship extends Model
{
    protected $fillable = ['name','firm','description','applyOnline', 'image', 'created_at'];

    public function getImage()
    {
        if(!$this->image){
            return null;
        }
        return asset('/storage/'.$this->image);
    }
    
    public function getDate()
    {
        if(!$this->created_at){
            return null;
        }
        $date           = $this->created_at;
        $dateIndoFormat = Carbon::parse($date)->format('D, d/m/Y');
        return $dateIndoFormat;
    }

    public function requirement()
    {
        return $this->hasOne(Requirement::class);
    }
}

