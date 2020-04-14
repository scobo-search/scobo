<?php
/*
 * This file is part of Scobo.
 *
 * For detailed copyright and license information, please view the
 * LICENSE file that was distributed with this source code.
 */
namespace Scobo;

require './vendor/autoload.php';

use Scobo\Drivers\Driver;

class Scobo {

    protected $driver;
    protected $index;

    public function __construct(Driver $driver)
    {
        $this->driver = $driver;
    }

    /**
     * Set the index to search or modify
     *
     * @param string $index
     * @return $this
     */
    public function index(string $index) : self {
        $this->index = $index;
        return $this;
    }

    public function gambits(array $gambits) : self {
        return $this;
    }

    public function filters(array $filters) : self {
        return $this;
    }

    public function add(string $index, array $object) : string {
        $this->driver->add($index, $object);
    }

    public function remove(string $objectId) : bool {
        $this->driver->delete($objectId);
    }

    public function search(string $index, string $query, array $options = null) : array {
        $this->driver->search($index, $query, $options);
    }

    private function runGambits(string $query) {
        
    }
}