<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dotb extends Model
{
   public $timestamps = false;
    protected $fillable = [ 'street', 'home', 'city', 'country', 'user_id'];


}