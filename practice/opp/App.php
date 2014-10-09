<?php

class App {
    private $nombre;
    private $consumo;
    private $estado;
    private $memoria;
    
    
//    public function __construct() {
//        $this->nombre = '';
//        $this->consumo = 0;
//        $this->estado = FALSE; 
//        $this->memoria = 0;
//        
//    }
    public function __construct($nombre,$consumo,$memoria) {
        $this->nombre = $nombre;
        $this->consumo = $consumo;
        $this->estado = FALSE; 
        $this->memoria = $memoria;
        
    }
    
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    public function setEstado($estado) {
        $this->estado = $estado;
    }
    public function setConsumo($consumo) {
        $this->consumo = $consumo;
    }  
    public function getNombre() {
        return $this->nombre;
    }
    public function getConsumo() {
        return $this->consumo;
    }
    public function getEstado() {
        return $this->estado;
    }
    public function getMemoria() {
        return $this->memoria;
    }    
   
    public function run(Device $device) {
        $this->setEstado(true);
        if($device->getBateria()<$this->getConsumo()){
          $device->setBateria($device->getBateria()-$this->getConsumo());  
        }
        else{
            echo 'la bateria del dispositivo no es suficiente para lanzar a app';   
        }
         
    }
    public function stop(Device $device) {
        $this->setEstado(FALSE);
    }


}

