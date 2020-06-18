<?php
/*
 * This file is part of Scobo.
 *
 * For detailed copyright and license information, please view the
 * LICENSE file that was distributed with this source code.
 */
namespace Scobo;

use Scobo\Drivers\AbstractDriver;

class Scobo {

    protected $driver;
    protected $index;

    public function __construct(AbstractDriver $driver)
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

    public function add(array $object) : string {
        return $this->driver->add($this->index, $object);
    }

    public function remove(string $objectId) : bool {
        return $this->driver->delete($this->index, $objectId);
    }

    public function search(string $query, array $options = null) : array {
        return $this->driver->search($this->index, $query, $options);
    }
}