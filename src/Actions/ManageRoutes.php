<?php

namespace Dommer1\Aviationstack\Actions;

use Dommer1\Aviationstack\Resources\Route;

trait ManageRoutes {

    /**
     * Get the collection of routes.
     *
     * @return  $this
     */
    public function routes() {
        $this->endpoint = 'routes';
        $this->class = Route::class;

        return $this;
    }
}
