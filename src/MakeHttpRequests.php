<?php

namespace Dommer1\Aviationstack;

use Exception;
use Dommer1\Aviationstack\Exceptions\AviationstackException;
use Dommer1\Aviationstack\Exceptions\TimeoutException;
use Psr\Http\Message\ResponseInterface;

trait MakeHttpRequests {

    /**
     * Make a GET request to Aviationstack and return the response.
     *
     * @param  string  $uri
     * @return mixed
     */
    public function apiGet($uri, array $payload = []) {
        return $this->request('GET', $uri, $payload);
    }

    /**
     * Make request to Aviationstack and return the response.
     *
     * @param  string  $verb
     * @param  string  $uri
     * @param  array  $payload
     * @return mixed
     */
    protected function request($verb, $uri, array $payload = []) {
        $accessKeyParam = ['access_key' => $this->apiKey];

        $response = $this->guzzle->request(
            $verb,
            $uri,
            ['query' => empty($payload) ? $accessKeyParam : array_merge($accessKeyParam, $payload)]
        );

        $statusCode = $response->getStatusCode();

        if ($statusCode < 200 || $statusCode > 299) {
            return $this->handleRequestError($response);
        }

        $responseBody = (string) $response->getBody();

        return json_decode($responseBody, true) ?: $responseBody;
    }

    /**
     * Handle the request error.
     *
     * @param  \Psr\Http\Message\ResponseInterface  $response
     * @return void
     *
     * @throws \Exception
     * @throws Dommer1\Aviationstack\Exceptions\AviationstackException
     */
    protected function handleRequestError(ResponseInterface $response) {
        if (in_array($response->getStatusCode(), [401, 403, 404, 429, 500])) {
            throw new AviationstackException(json_decode((string) $response->getBody(), true)['error']['message']);
        }

        throw new Exception((string) $response->getBody());
    }

    /**
     * Retry the callback or fail after x seconds.
     *
     * @param  int  $timeout
     * @param  callable  $callback
     * @param  int  $sleep
     * @return mixed
     *
     * @throws \Dommer1\Aviationstack\Exceptions\TimeoutException
     */
    public function retry($timeout, $callback, $sleep = 5) {
        $start = time();

        beginning:

        if ($output = $callback()) {
            return $output;
        }

        if (time() - $start < $timeout) {
            sleep($sleep);

            goto beginning;
        }

        throw new TimeoutException($output);
    }
}
