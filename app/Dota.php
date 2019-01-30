<?php

namespace App;
use User;
use Dao;
use Illuminate\Database\Eloquent\Model;

class Dota extends Model
{
	
	public $timestamps = false;
     protected $fillable = ['id','home', 'street',  'city', 'country','user_id'];

}
