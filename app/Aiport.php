<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aiport extends Model
{
    public function arrivingFlights() {
        return $this->hasMany('App\Flight', 'arrivalAiport_id');
    }

    public function departingFlights() {
        return $this->hasMany('App\Flight', 'DepatureAiport_id');
    }
}
