<?php

namespace Scobo\Drivers;

class SearchObject {

    /**
     * @var array
     */
    public $data = [];

    /**
     * @var int
     */
    public $offset = 0;

    /**
     * @var int
     */
    public $limit = 0;

    /**
     * @var string
     */
    public $query = '';

    public function outputArray() {
        return [
            "data" => $this->data,
            "offset" => $this->offset,
            "limit" => $this->limit,
            "query" => $this->query
        ];
    }
}