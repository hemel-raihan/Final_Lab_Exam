<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //protected $table = 'user_table';
	protected $primaryKey = "id";
	public $timestamps = false;
    //use HasFactory;
}
