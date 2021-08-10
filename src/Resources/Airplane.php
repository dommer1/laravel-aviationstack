<?php

namespace Dommer1\Aviationstack\Resources;

class Airplane extends Resource {

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $iataCode;

    /**
     * @var int
     */
    public $airplaneId;

    /**
     * @var string
     */
    public $airlineIataCode;

    /**
     * @var string
     */
    public $iataCodeLong;

    /**
     * @var int
     */
    public $iataCodeShort;

    /**
     * @var ?string
     */
    public $airlineIcaoCode;

    /**
     * @var int
     */
    public $constructionNumber;

    /**
     * @var string
     */
    public $deliveryDate;

    /**
     * @var int
     */
    public $enginesCount;

    /**
     * @var string
     */
    public $enginesType;

    /**
     * @var string
     */
    public $firstFlightDate;

    /**
     * @var string
     */
    public $icaoCodeHex;

    /**
     * @var int
     */
    public $lineNumber;

    /**
     * @var string
     */
    public $modelCode;

    /**
     * @var string
     */
    public $registrationNumber;

    /**
     * @var ?string
     */
    public $testRegistrationNumber;

    /**
     * @var int
     */
    public $planeAge;

    /**
     * @var ?int
     */
    public $planeClass;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $planeOwner;

    /**
     * @var ?string
     */
    public $planeSeries;

    /**
     * @var string
     */
    public $planeStatus;

    /**
     * @var string
     */
    public $productionLine;

    /**
     * @var string
     */
    public $registrationDate;

    /**
     * @var ?string
     */
    public $rolloutDate;
}
