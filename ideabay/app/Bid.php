<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    protected $table = 'bids';
    public $primaryKey = 'id';
    public $timestamp = true;

     public function user(){
        return $this->belongsTo('App\User');
    }

}
