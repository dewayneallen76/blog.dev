<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
  public function getCreatedAtAttributes($value)
	{
		$utc = \Carbon\Carbon::createFromFormat($this->getDateFormat(), $value);
        return $utc->setTimezone('America/Chicago');
	}

	public function getUpdatedAtAttributes($value)
	{
		$utc = \Carbon\Carbon::createFromFormat($this->getDateFormat(), $value);
        return $utc->setTimezone('America/Chicago');
	}

  public function setPasswordAttribute($value)
	{
    	$this->attributes['password'] = Hash::make($value);
	}
}
