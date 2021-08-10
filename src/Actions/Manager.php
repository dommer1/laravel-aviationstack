<?php

namespace Dommer1\Aviationstack\Actions;

use Dommer1\Aviationstack\Resources\Results;
use Dommer1\Aviationstack\Resources\Pagination;

trait Manager {

    /**
     * The Aviationstack endpoint
     *
     * @var string
     */
    public $endpoint;

    /**
     * The result class
     *
     * @var string
     */
    public $class;

    /**
     * The endpoint parameters
     *
     * @var array
     */
    public $parameters = [];

    /**
     * Build parameters for endpoint
     *
     * @param  array  $parameters
     * @return  $this
     */
    public function addParameters(array $parameters) {
        $this->parameters = $this->parameters + $parameters;

        return $this;
    }

    /**
     * Transform the items of the collection to the given class.
     *
     * @param  array  $collection
     * @param  string  $class
     * @param  array  $extraData
     * @return array
     */
    protected function transformCollection($collection, $class, $extraData = []) {
        $response = [];

        if (isset($collection['pagination'])) {
            $response['pagination'] = new Pagination($collection['pagination']);
        }

        $response['data'] = array_map(function ($data) use ($class, $extraData) {
            return new $class($data + $extraData, $this);
        }, $collection['data']);

        return $response;
    }

    /**
     * Get results from Aviationstack and transfrom to items to class
     *
     * @return  $this;
     */
    public function get() {
        return new Results(
            $this->transformCollection(
                $this->apiGet($this->endpoint, $this->parameters),
                $this->class,
            )
        );
    }

    /**
     * Get total number of results
     *
     * @return  int
     */
    public function total() {
        return $this->addParameters(['limit' => 0])->get()['pagination']->total;
    }

    /**
     * Add limit parameter
     *
     * @param  int  $limit
     * @return  $this
     */
    public function limit(int $limit) {
        return $this->addParameters(['limit' => $limit]);
    }

    /**
     * Add offset parameter
     *
     * @param  int  $offset
     * @return  $this
     */
    public function offset(int $offset) {
        return $this->addParameters(['offset' => $offset]);
    }

    /**
     * Search for resource
     *
     * @param  string  $search
     * @return  $this
     */
    public function search($search) {
        return $this->addParameters(['search' => $search]);
    }
}
