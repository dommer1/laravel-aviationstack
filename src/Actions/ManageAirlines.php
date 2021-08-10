<?php

namespace Dommer1\Aviationstack\Actions;

use Dommer1\Aviationstack\Resources\Airline;

trait ManageAirlines {

    /**
     * Get the collection of airlines.
     *
     * @return  $this
     */
    public function airlines() {
        $this->endpoint = 'airlines';
        $this->class = Airline::class;

        return $this;
    }
}
