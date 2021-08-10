<?php

namespace Dommer1\Aviationstack\Actions;

use Dommer1\Aviationstack\Resources\Country;

trait ManageCountries {

    /**
     * Get the collection of countries.
     *
     * @return  $this
     */
    public function countries() {
        $this->endpoint = 'countries';
        $this->class = Country::class;

        return $this;
    }
}
