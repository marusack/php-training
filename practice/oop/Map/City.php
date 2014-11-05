<?php

namespace Map;

class City
{
    public $name;
    public $pc;
    
    public function __construct($name, $pc)
    {
        $this->name = $name;
        $this->pc = $pc;
    }
    
    public function setName($name)
    {
        $this->name = $name;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function getPc()
    {
        return $this->pc;
    }
}

