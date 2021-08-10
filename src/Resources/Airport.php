<?php

namespace Dommer1\Aviationstack\Resources;

class Airport extends Resource {

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $gmt;

    /**
     * @var int
     */
    public $airportId;

    /**
     * @var string
     */
    public $iataCode;

    /**
     * @var string
     */
    public $cityIataCode;

    /**
     * @var string
     */
    public $icaoCode;

    /**
     * @var string
     */
    public $countryIso2;

    /**
     * @var int
     */
    public $geonameId;

    /**
     * @var float
     */
    public $latitude;

    /**
     * @var float
     */
    public $longitude;

    /**
     * @var string
     */
    public $airportName;

    /**
     * @var string
     */
    public $countryName;

    /**
     * @var ?string
     */
    public $phoneNumber;

    /**
     * @var string
     */
    public $timezone;
}
