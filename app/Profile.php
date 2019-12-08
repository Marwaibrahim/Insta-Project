<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage(){
        $imagePath = ($this->image) ?  $this->image :"profile/mONX766Tb0AHFH86ChlgRgKnqSPZeqCQSLb7Hcy5.png";
        return '/storage/'. $imagePath ;
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
