<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $table="customer";
    public function bill(){
        $this->hasMany('App\Customer','id_customer','id');
    }
}
