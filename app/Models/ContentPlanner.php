<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class ContentPlanner extends Model
{

    use HasFactory;


    protected $fillable = [

        'activity_id',
        'title',
        'platform',
        'publish_date',
        'caption',
        'status',
        'publish_url',
        'created_by'

    ];



    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }



    public function creator()
    {
        return $this->belongsTo(User::class,'created_by');
    }

}