<?php
/*
 * This file is part of Scobo.
 *
 * For detailed copyright and license information, please view the
 * LICENSE file that was distributed with this source code.
 */

namespace Scobo;

class Scobo {

    private $driver;

    public function __construct(AbstractDriver $driver)
    {
        $this->driver = $driver;
    }

    public function index(string $index) : self {
        return $this;
    }

    public function gambits(array $gambits) : self {
        return $this;
    }

    public function add(array $object) : string {

    }

    public function remove(string $objectId) : bool {

    }

    public function search(string $query, array $options = null) : array {

    }
}