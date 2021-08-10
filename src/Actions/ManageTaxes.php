<?php

namespace Dommer1\Aviationstack\Actions;

use Dommer1\Aviationstack\Resources\Tax;

trait ManageTaxes {

    /**
     * Get the collection of taxes.
     *
     * @return  $this
     */
    public function taxes() {
        $this->endpoint = 'taxes';
        $this->class = Tax::class;

        return $this;
    }
}
