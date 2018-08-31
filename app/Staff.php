<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'staff';
	public $timestamps = false;

	protected $dates = [
		'created',
		'updated'
	];

	protected $fillable = [
		'id',
		'name',
		'email'
	];

  public function inventory()
  {
     return $this->hasMany('App\Models\Inventory');
  }

  public function room()
  {
      return $this->hasOne('App\Models\Room');
  }

}
