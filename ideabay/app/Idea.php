<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    
    protected $table = 'ideas';
    public $primaryKey = 'id';
    public $timestamp = true;
}
