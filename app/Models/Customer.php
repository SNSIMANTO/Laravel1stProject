<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;; //namespace for trash data


class Customer extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table="customers";
    protected $primaryKey="customer_id";

    public function setNameAttribute($value){        //Mutator (data form dia access korar time e change korte use kora hoi)
        $this->attributes['name']=ucwords($value);
    }

    public function getDobAttribute($as){    //Accessor (data database thake change kore view korar jonnoh use kora hoi)
        return date("d-M-Y",strtotime($as));
    }
}
