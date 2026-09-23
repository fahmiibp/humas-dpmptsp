<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'created_by',
        'title',
        'slug',
        'start_date',
        'end_date',
        'start_time',
        'end_time',
        'location',
        'pic_name',
        'pic_phone',
        'description',
        'status',
        'cover_photo',
        'google_drive_url',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
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