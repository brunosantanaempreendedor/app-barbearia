<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Units extends Model
{
    use SoftDeletes;

    protected $table = "units";
   	protected $fillable = [
      'id',
      'name'
   ];
}
