<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use SoftDeletes;

    protected $table = "clients";
   	protected $fillable = [
      'id',
      'name',
      'email',
      'phone',
      'birthday'
   ];
}
