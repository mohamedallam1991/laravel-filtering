<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Filters\Course\CourseFilters;
use Illuminate\Http\Request;
use App\Subject;
use App\User;

class Course extends Model
{
    public $appends = [ 'started' ];
    public $hidden = [ 'users' ];

    public function scopeFilter(Builder $builder, Request $request, array $filters = [])
    {
        return (new CourseFilters($request))->add($filters)->filter($builder);
    }
    
    public function subjects()
    {
        return $this->morphToMany(Subject::class, 'subjectable');
    }

    public function getStartedAttribute()
    {
        if(!auth()->check()) {
            return false;
        }
        return $this->users->contains(auth()->user());
    }  
    
   public function users()
   {
       return $this->belongsToMany(User::class);
   }

   public function getDifficultyAttribute($value)
    {
        return ucfirst($value);
    }

    public function getTypeAttribute($value)
    {
        return ucfirst($value);
    }

    public function getFreeAttribute($value)
    {
        return $value == true ? 'Free' : 'Premium';
    }

    public function getFormatedStartedAttribute()
    {
        return $this->started == true ? 'Started' : 'Not Started';
    }

}
