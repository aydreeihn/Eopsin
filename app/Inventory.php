<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $table = 'inventory';
	public $timestamps = false;

	protected $dates = [
		'created',
		'updated'
	];

	protected $fillable = [
		'id',
        'pid',
        'staff_id',
        'room_id',
        'status_id',
		'name',
        'description'
	];

    public function staff()
    {
        return $this->belongsTo(Staff::Class);
    }

    public function room()
    {
        return $this->belongsTo(Room::Class);
    }

    public function status()
    {
        return $this->belongsTo(Status::Class);
    }
}
