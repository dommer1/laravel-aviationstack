<?php

namespace Dommer1\Aviationstack\Actions;

use Dommer1\Aviationstack\Resources\Flight;

trait ManageFlights {

    /**
     * Get the collection of flights.
     *
     * @return  $this
     */
    public function flights() {
        $this->endpoint = 'flights';
        $this->class = Flight::class;

        return $this;
    }

    /**
     * Add flight_status parameter
     *
     * @param  string  $flight_status
     * @return  $this
     */
    public function status(string $flightStatus) {
        return $this->addParameters(['flight_status' => $flightStatus]);
    }

    /**
     * Add date parameter
     *
     * @param  string  $date
     * @return  $this
     */
    public function date(string $date) {
        return $this->addParameters(['flight_date' => $date]);
    }

    /**
     * Add dep_iata parameter
     *
     * @param  string  $depIata
     * @return  $this
     */
    public function depIata(string $depIata) {
        return $this->addParameters(['dep_iata' => $depIata]);
    }

    /**
     * Add arr_iata parameter
     *
     * @param  string  $arrIata
     * @return  $this
     */
    public function arrIata(string $arrIata) {
        return $this->addParameters(['arr_iata' => $arrIata]);
    }

    /**
     * Add dep_icao parameter
     *
     * @param  string  $depIcao
     * @return  $this
     */
    public function depIcao(string $depIcao) {
        return $this->addParameters(['dep_icao' => $depIcao]);
    }

    /**
     * Add arr_icao parameter
     *
     * @param  string  $arrIcao
     * @return  $this
     */
    public function arrIcao(string $arrIcao) {
        return $this->addParameters(['arr_icao' => $arrIcao]);
    }

    /**
     * Add airline_name parameter
     *
     * @param  string  $airlineName
     * @return  $this
     */
    public function airlineName(string $airlineName) {
        return $this->addParameters(['airline_name' => $airlineName]);
    }

    /**
     * Add airline_iata parameter
     *
     * @param  string  $airlineName
     * @return  $this
     */
    public function airlineIata(string $airlineIata) {
        return $this->addParameters(['airline_iata' => $airlineIata]);
    }

    /**
     * Add airline_icao parameter
     *
     * @param  string  $airlineIcao
     * @return  $this
     */
    public function airlineIcao(string $airlineIcao) {
        return $this->addParameters(['airline_icao' => $airlineIcao]);
    }

    /**
     * Add flight_number parameter
     *
     * @param  string  $flightNumber
     * @return  $this
     */
    public function flightNumber(string $flightNumber) {
        return $this->addParameters(['flight_number' => $flightNumber]);
    }

    /**
     * Add flight_iata parameter
     *
     * @param  string  $flightIata
     * @return  $this
     */
    public function flightIata(string $flightIata) {
        return $this->addParameters(['flight_iata' => $flightIata]);
    }

    /**
     * Add flight_icao parameter
     *
     * @param  string  $flightIcao
     * @return  $this
     */
    public function flightIcao(string $flightIcao) {
        return $this->addParameters(['flight_icao' => $flightIcao]);
    }

    /**
     * Add min_delay_dep parameter
     *
     * @param  string  $minDelayDep
     * @return  $this
     */
    public function minDelayDep(string $minDelayDep) {
        return $this->addParameters(['min_delay_dep' => $minDelayDep]);
    }

    /**
     * Add min_delay_arr parameter
     *
     * @param  string  $minDelayArr
     * @return  $this
     */
    public function minDelayArr(string $minDelayArr) {
        return $this->addParameters(['min_delay_arr' => $minDelayArr]);
    }

    /**
     * Add max_delay_dep parameter
     *
     * @param  string  $maxDelayDep
     * @return  $this
     */
    public function maxDelayDep(string $maxDelayDep) {
        return $this->addParameters(['max_delay_dep' => $maxDelayDep]);
    }

    /**
     * Add max_delay_arr parameter
     *
     * @param  string  $maxDelayArr
     * @return  $this
     */
    public function maxDelayArr(string $maxDelayArr) {
        return $this->addParameters(['max_delay_arr' => $maxDelayArr]);
    }
}
