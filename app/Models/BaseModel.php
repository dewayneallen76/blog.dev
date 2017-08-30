<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
  public function getCreatedAtAttribute($value)
	{
		$utc = Carbon::createFromFormat($this->getDateFormat(), $value);
        return $utc->setTimezone('America/Chicago')->toDayDateTimeString();
	}

	public function getUpdatedAtAttribute($value)
	{
		$utc = Carbon::createFromFormat($this->getDateFormat(), $value);
        return $utc->setTimezone('America/Chicago')->toDayDateTimeString();
	}

  public function setPasswordAttribute($value)
	{
    	$this->attributes['password'] = \Hash::make($value);
	}
}
