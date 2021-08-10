<?php

namespace Dommer1\Aviationstack\Actions;

use Dommer1\Aviationstack\Resources\Airplane;

trait ManageAirplanes {

    /**
     * Get the collection of airplanes.
     *
     * @return  $this
     */
    public function airplanes() {
        $this->endpoint = 'airplanes';
        $this->class = Airplane::class;

        return $this;
    }
}
