<?php

namespace Dommer1\Aviationstack\Actions;

use Dommer1\Aviationstack\Resources\Airport;

trait ManageAirports {

    /**
     * Get the collection of aircports.
     *
     * @return  $this
     */
    public function airports() {
        $this->endpoint = 'airports';
        $this->class = Airport::class;

        return $this;
    }
}
