<?php

namespace Dommer1\Aviationstack;

use GuzzleHttp\Client as HttpClient;
use Dommer1\Aviationstack\Actions\Manager;
use Dommer1\Aviationstack\MakeHttpRequests;
use Dommer1\Aviationstack\Actions\ManageTaxes;
use Dommer1\Aviationstack\Actions\ManageCities;
use Dommer1\Aviationstack\Actions\ManageRoutes;
use Dommer1\Aviationstack\Actions\ManageFlights;
use Dommer1\Aviationstack\Actions\ManageAirlines;
use Dommer1\Aviationstack\Actions\ManageAirports;
use Dommer1\Aviationstack\Actions\ManageAircrafts;
use Dommer1\Aviationstack\Actions\ManageAirplanes;
use Dommer1\Aviationstack\Actions\ManageCountries;
use Dommer1\Aviationstack\Exceptions\MissingAccessKeyException;

class Aviationstack {

    use MakeHttpRequests,
        Manager,
        ManageAircrafts,
        ManageAirlines,
        ManageAirplanes,
        ManageAirports,
        ManageCities,
        ManageCountries,
        ManageFlights,
        ManageRoutes,
        ManageTaxes;

    /**
     * The Aviationstack API Key.
     *
     * @var string
     */
    protected $apiKey;

    /**
     * The Guzzle HTTP Client instance.
     *
     * @var \GuzzleHttp\Client
     */
    public $guzzle;

    /**
     * Number of seconds a request is retried.
     *
     * @var int
     */
    public $timeout = 30;

    /**
     * Create a new Aviationstack instance.
     *
     * @param  \GuzzleHttp\Client|null  $guzzle
     * @return void
     */
    public function __construct(HttpClient $guzzle = null) {
        $this->setApiKey($guzzle);

        if (!is_null($guzzle)) {
            $this->guzzle = $guzzle;
        }
    }

    /**
     * Set the api key and setup the guzzle request object.
     *
     * @param  \GuzzleHttp\Client|null  $guzzle
     * @return $this
     */
    public function setApiKey($guzzle = null) {
        $apiKey = config('aviationstack.key');

        if (is_null($apiKey)) {
            throw new MissingAccessKeyException();
        }

        $this->apiKey = $apiKey;

        $this->guzzle = $guzzle ?: new HttpClient([
            'base_uri' => (config('aviationstack.https') ? 'https://' : 'http://') . 'api.aviationstack.com/v1/',
            'http_errors' => false,
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            ],
        ]);

        return $this;
    }

    /**
     * Set a new timeout.
     *
     * @param  int  $timeout
     * @return $this
     */
    public function setTimeout($timeout) {
        $this->timeout = $timeout;

        return $this;
    }

    /**
     * Get the timeout.
     *
     * @return int
     */
    public function getTimeout() {
        return $this->timeout;
    }
}
