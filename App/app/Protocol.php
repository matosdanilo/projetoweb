<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Protocol extends Model
{
    //
    protected $fillable = [
      'status','description', 'receiver', 'typedocument_id','annex_id','emitter_id','receiver_id', 'department_id'
    ];
}
