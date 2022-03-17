<?php

namespace App\Model;

class Task implements \JsonSerializable
{
    /**
     * @var array
     */
    private $_data;
    
    public function __construct($data) // TODO: Стоит указать тип параметра
    {
        $this->_data = $data;
    }

    /**
     * @return array
     * @todo: Название метода не соответствует его функционалу. Это либо просто геттер, либо здесь не реализована сериализация
     */
    public function jsonSerialize(): array
    {
        return $this->_data;
    }
}
