<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // if I want to change the table name it is done here
    //protected $table = 'other name'
    
    public $primaryKey = 'id'; //pk
}
