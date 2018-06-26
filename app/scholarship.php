<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class scholarship extends Model
{
    protected $fillable = [
        'admin_id',
        'name',
        'firm',
        'description',
        'applyOnline', 
        'image', 
        'created_at',
        // 'updated_ad',
    ];

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
        $dateIndoFormat = Carbon::parse($date)->format('l, d/m/Y');
        return $dateIndoFormat;
    }

    public function getDay()
    {
        if(!$this->created_at){
            return null;
        }
        $date   = $this->created_at;
        $day    = Carbon::parse($date)->format('d');
        return $day;
    }

    public function getMonth()
    {
        if(!$this->created_at){
            return null;
        }
        $date   = $this->created_at;
        $month    = Carbon::parse($date)->format('F');
        return $month;
    }

    /**
     *  Method One to One Recuirement
     */
    public function requirement()
    {
        return $this->hasOne(Requirement::class);
    }

    /**
     * Method One to Many Scholarship->Comment
     */

    public function comment()
    {
        return $this->hasMany(Comments::class);
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
<<<<<<< HEAD
    public function read()
    {
        $readScholarship = scholarship::orderBy('id')->get();

        return $readScholarship;
=======

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
>>>>>>> 7938e2623dbc585c40a0451e0c1256fd2e254c13
    }
}

