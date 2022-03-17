<?php

namespace App\Model;

class Project
{
    /**
     * @var array
     */
    public $_data; // TODO: Здесь стоит выставить private
    
    public function __construct($data) // TODO: Возможно стоит указать тип параметра
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
