<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    public function category()
{
    return $this->belongsTo(Category::class);
}


public function creator()
{
    return $this->belongsTo(User::class,'created_by');
}


public function documentations()
{
    return $this->hasMany(Documentation::class);
}


public function files()
{
    return $this->hasMany(ActivityFile::class);
}


public function contentPlans()
{
    return $this->hasMany(ContentPlanner::class);
}
}
