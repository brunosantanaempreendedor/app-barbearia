<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Barbers extends Model
{
    use SoftDeletes;

    protected $table = "barbers";
   	protected $fillable = [
      'id',
      'name'
   ];





}
