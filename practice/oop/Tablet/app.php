<?php

namespace Tablet\App;

class App
{
    private $name;
    private $batCons;
    
    /**
     * App constructor
     * @param string $name
     * @param int $batCons
     */
    public function __construct($name, $batCons)
    {
        $this->name = $name;
        $this->batCons = $batCons;
    }
    
    /**
     * Set app name
     * @param string $name
     */
    protected function setName($name)
    {
        $this->name = $name;
    }
    
    /**
     * Set battery consumption
     * @param int $batCons
     */
    protected function setBatCons($batCons)
    {
        $this->batCons = $batCons;
    }
    
    /**
     * Get app name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Get battery consumption
     * @return int
     */
    public function getBatCons()
    {
        return $this->batCons;
    }
}
