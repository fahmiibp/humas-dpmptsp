<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class ActivityFile extends Model
{

    use HasFactory;


    protected $fillable = [

        'activity_id',
        'name',
        'file_path',
        'file_type',
        'uploaded_by'

    ];



    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }



    public function uploader()
    {
        return $this->belongsTo(User::class,'uploaded_by');
    }

}