<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    public function arriavalAiport() {
        return $this->belongsTo('App\Airport', 'arrivalAiport_id');
    }

    public function departureAiport() {
        return $this->belongsTo('App\Airport', 'DepatureAiport_id');
    }

    public function passengers() {
        $this->belongsToMany('App\Customer', 'flight_customer');
    }
}
