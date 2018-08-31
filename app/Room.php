<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'room';
	public $timestamps = false;

	protected $dates = [
		'created',
		'updated'
	];

	protected $fillable = [
		'id',
        'number',
        'staff_id'
	];

    public function staff()
    {
        return $this->belongsTo(Staff::Class);
    }

    public function inventory()
    {
        return $this->hasMany('App\Models\Inventory');
    }
}
