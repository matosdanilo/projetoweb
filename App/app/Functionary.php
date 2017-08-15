<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Functionary extends Model
{
    //
    protected $fillable = [
      'name','cpf','photo','phone','user_id','protocol_id', 'department_id'
    ];
}
