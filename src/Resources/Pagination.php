<?php

namespace Dommer1\Aviationstack\Resources;

class Pagination extends Resource {

    /**
     * @var int
     */
    public $offset;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var int
     */
    public $count;

    /**
     * @var int
     */
    public $total;
}
