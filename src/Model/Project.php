<?php

namespace App\Model;

class Project
{
    /**
     * @var array
     */
    public $_data; // TODO: Make this property private as we need encapsulation
    
    public function __construct($data) // TODO: Declare type of the parameter ($data)
    {
        $this->_data = $data;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return (int) $this->_data['id'];
    }

    /**
     * @return string
     */
    public function toJson()
    {
        return json_encode($this->_data);
    }
}
