<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Scheduling extends Model
{
    use SoftDeletes;

    protected $table = "scheduling";
   	protected $fillable = [
      'id',
      'date',
      'services_id',
      'units_id',
      'appointment',
      'barbers_id',
      'name',
      'email',
      'phone',
      'another_person',
      'name_person_checked',
      'created_at',
      'updated_at',
      'deleted_at',
      'status_id'
   ];

   public function units()
    {
        return $this->belongsTo('App\Units', 'units_id')->withTrashed();
    }

    public function services()
    {
        return $this->belongsTo('App\Services', 'services_id')->withTrashed();
    }
}