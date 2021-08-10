<?php

namespace Dommer1\Aviationstack\Actions;

use Dommer1\Aviationstack\Resources\Aircraft;

trait ManageAircrafts {

    /**
     * Get the collection of aircrafts.
     *
     * @return  $this
     */
    public function aircrafts() {
        $this->endpoint = 'aircraft_types';
        $this->class = Aircraft::class;

        return $this;
    }
}
