<?php

namespace App\Model;

class Task implements \JsonSerializable
{
    /**
     * @var array
     */
    private $_data;
    
    public function __construct($data) // TODO: Declare parameter type for `$data`
    {
        $this->_data = $data;
    }

    /**
     * @return array
     * @todo: The name of the method doesn't match with it's functionality.
     * @todo: It either should be just a getter or there should be implemented a serialization.
     */
    public function jsonSerialize(): array
    {
        return $this->_data;
    }
}
