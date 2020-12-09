<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use SoftDeletes;

    protected $table = "products";
   	protected $fillable = [
      'id',
      'name',
      'price'
   ];





}
