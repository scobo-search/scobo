<?php

namespace Scobo\Drivers;

abstract class Driver {
    /**
     * Search functionality
     *
     * @param string $index
     * @param string $query
     * @param array $options
     * @return mixed
     */
    abstract public function search(string $index, string $query, array $options);

    /**
     * Add item to index
     *
     * @param string $index
     * @param array $object
     * @return string
     */
    abstract public function addItem(string $index, array $object): string;

    /**
     * Add item to index
     *
     * @param string $index
     * @param array $object
     * @return string
     */
    abstract public function addItems(string $index, array $object): string;

    /**
     * Delete object from index
     *
     * @param string $objectId
     * @return mixed
     */
    abstract public function delete(string $objectId);

    /**
     * Add a filter to the search
     *
     * @param array $filter
     * @return mixed
     */
    abstract public function filter(array $filter);

    /**
     * Flush index of all objects
     *
     * @param string $index
     * @return mixed
     */
    abstract public function flush(string $index);
}