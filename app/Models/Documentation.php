<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Documentation extends Model
{

    use HasFactory;


    protected $fillable = [

        'activity_id',
        'file_path',
        'file_type',
        'caption',
        'is_cover',
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