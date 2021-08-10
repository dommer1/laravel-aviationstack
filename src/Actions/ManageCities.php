<?php

namespace Dommer1\Aviationstack\Actions;

use Dommer1\Aviationstack\Resources\City;

trait ManageCities {

    /**
     * Get the collection of cities.
     *
     * @return  $this
     */
    public function cities() {
        $this->endpoint = 'cities';
        $this->class = City::class;

        return $this;
    }
}
