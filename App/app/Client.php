<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    protected $fillable = [
      'name','secondName','cni','logo','user_id','protocol_id'
    ];
}
