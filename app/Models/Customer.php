<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table="customers";
    protected $primaryKey="customer_id";

    public function setNameAttribute($value){        //Mutator (data form dia access korar time e change korte use kora hoi)
        $this->attributes['name']=ucwords($value);
    }

    public function getDobAttribute($as){    //Accessor (data database thake change kore view korar jonnoh use kora hoi)
        return date("d-M-Y",strtotime($as));
    }
}
