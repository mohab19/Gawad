<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $fillable = ['flag', 'name', 'caption' , 'disc' ,'imgPath' ];
}
