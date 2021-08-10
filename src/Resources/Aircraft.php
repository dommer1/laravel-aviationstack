<?php

namespace Dommer1\Aviationstack\Resources;

class Aircraft extends Resource {

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $iataCode;

    /**
     * @var string
     */
    public $aircraftName;

    /**
     * @var int
     */
    public $planeTypeId;
}
