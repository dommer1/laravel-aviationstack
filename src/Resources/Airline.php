<?php

namespace Dommer1\Aviationstack\Resources;

class Airline extends Resource {

    /**
     * @var int
     */
    public $id;

    /**
     * @var float
     */
    public $fleetAverageAge;

    /**
     * @var int
     */
    public $airlineId;

    /**
     * @var string
     */
    public $callsign;

    /**
     * @var string
     */
    public $hubCode;

    /**
     * @var string
     */
    public $iataCode;

    /**
     * @var string
     */
    public $icaoCode;

    /**
     * @var string
     */
    public $countryIso2;

    /**
     * @var ?int
     */
    public $dateFounded;

    /**
     * @var ?int
     */
    public $iataPrefixAccounting;

    /**
     * @var string
     */
    public $airlineName;

    /**
     * @var string
     */
    public $countryName;

    /**
     * @var int
     */
    public $fleetSize;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;
}
