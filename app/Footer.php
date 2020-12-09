<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Footer extends Model
{
    use SoftDeletes;

    protected $table = "footer";
   	protected $fillable = [
      'id',
      'description',
      'address',
      'email',
      'phone',
      'description',
      'email',
      'label1',
      'label2',
      'label3',
      'label4',
      'label5',
      'label6',
      'label7',
      'label8'
   ];
}