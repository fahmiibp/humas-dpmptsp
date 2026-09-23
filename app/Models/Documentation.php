<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Documentation extends Model
{
    public function activity()
{
    return $this->belongsTo(Activity::class);
}


public function uploader()
{
    return $this->belongsTo(User::class,'uploaded_by');
}
}
