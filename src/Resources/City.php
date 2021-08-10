<?php

namespace Dommer1\Aviationstack\Resources;

class City extends Resource {

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
    public $cityId;

    /**
     * @var string
     */
    public $iataCode;

    /**
     * @var string
     */
    public $countryIso2;

    /**
     * @var string
     */
    public $geonameId;

    /**
     * @var int
     */
    public $latitude;

    /**
     * @var int
     */
    public $longitude;

    /**
     * @var string
     */
    public $cityName;

    /**
     * @var string
     */
    public $timezone;
}
