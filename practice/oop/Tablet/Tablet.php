<?php

//namespace Tablet\Tablet;

class Tablet 
{
    private $battery;
    private $apps;
    private $running;
    
    /**
     * Tablet constructor
     */
    public function __construct() {
        $this->battery = 100;
        $this->apps = array();
        $this->running = array(false);
    }
    
    /**
     * Set battery status
     * @param int $num
     */
    private function setBattery($num)
    {
        $this->battery = $num;
    }
    
    /**
     * Get battery status
     * @return int
     */
    public function getBattery() {
        return $this->battery;
    }
    
    /**
     * Get installed apps
     * @return array
     */
    public function getApps() {
        return $this->apps;
    }
    
    /**
     * Get running
     * @return boolean
     */
    public function getRunning() {
        return $this->running[0];
    }
    
    /**
     * Install new app
     * @param App $app
     */
    public function installApp(App $app)
    {
        if (count($this->apps) < 2) {
            $this->apps[] = $app;
        } else {
            echo "Error";
        }
    }
    
    /**
     * Show installed apps
     */
    public function showInstalledApps()
    {
        foreach ($this->apps as $apps) {
            echo $apps->getName();
        }
    }
}