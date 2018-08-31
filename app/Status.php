<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'status';
	public $timestamps = false;

	protected $dates = [
		'created',
		'updated'
	];

	protected $fillable = [
		'id',
		'name',
		'description'
	];

    public function inventory()
    {
       return $this->hasMany('App\Models\Inventory');
    }
}
