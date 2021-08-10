<?php

namespace Dommer1\Aviationstack\Exceptions;

use Exception;

class MissingAccessKeyException extends Exception {

    /**
     * Create a new exception instance.
     *
     * @return void
     */
    public function __construct() {
        parent::__construct('No API access key was supplied.');
    }
}
