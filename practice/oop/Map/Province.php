<?php

namespace Map;

class Province
{
    public $name;
    public $cities;

    public function __construct($name)
    {
        $this->name = $name;
        $this->cities = array();
    }
        
    public function getName()
    {
        return $this->name;
    }
    
    public function getCities()
    {
        return $this->cities;
    }
    
    public function addCity(City $city)
    {
        $this->cities[] = $city;
    }
}

