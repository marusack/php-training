<?php

/* 
*Represent a tablet device, where you can install just two apps. 
*Each app has a name and need a percent of battery to be executed during one minute. 
*Table runs just one app at a time, every time we run an app we must specify a duration. 
*Program must provide a way to know how much battery is left, and should not run none app 
* if there is not enough battery.
 */

include 'App.php';
class Device{
    
    private $bateria;
    private $App1; 
    private $App2; 
    private $memoria;
    
    public function __construct() {
        $this->bateria = 100;
        $this->memoria= 16384;//mb->16gb
        
    }
    public function setApp1(App $App) {
        $this->App1 = $App;
    }
    public function getApp1() {
        return $this->App1;
    }
    public function setApp2(App $App) {
        $this->App2 = $App;
    }
    public function getApp2() {
        return $this->App2;
    }
    public function setBateria($bat){
        $this->bateria=$bat;
    }
    public function getBateria() {
        return $this->bateria;
    }
    public function setMemoria($recuperado){
        $this->memoria=  $this->getMemoria()+$recuperado;
    }
    public function getMemoria() {
        return $this->memoria;
    }    
   
    public function instalarApp(App $app) {
       
        if (!isset($this->App1)) {//si no esta definida
            $this->setApp1($app);
            try {
                $MemoriaARestar= -$app->getMemoria();
                $this->setMemoria($MemoriaARestar);
                 echo 'la memoria actual es'.$this->getMemoria()."\n";
                
            } catch (Exception $ex) {
                 echo 'memoria insuficiente'."\n";
            }
            
            return 'se ha instalado la app 1'. $app->getNombre()."\n";
        } elseif (!isset($this->App2)) {
            try {
                $MemoriaARestar= -$app->getMemoria();
                $this->setMemoria($MemoriaARestar);
                 echo 'la memoria actual es'.$this->getMemoria()."\n";
                
            } catch (Exception $ex) {
                 echo 'memoria insuficiente'."\n";
            }
            return 'se ha instalado la app 2'. $app->getNombre()."\n";
         }
        else {return 'ya se han instalado dos app'."\n";}
    }
    
    public function correrApp(App $app) {
        
        $NombreAppAcorrer= $app->getNombre();
        //$auxApp1=$this->getApp1();
        $nueva=$this->getApp1()->getNombre();
        //$auxApp2=$this->getApp2();
        $nueva2= $this->getApp2()->getNombre();
       
        if ($NombreAppAcorrer==$nueva or $NombreAppAcorrer==$nueva2){//la app se encuentra instalada
            $deviceBateria=$this->getBateria();
            $bateriaApp=$app->getConsumo();
            if($deviceBateria<=$bateriaApp){//la app tiene bateria suficiente
                $EstadoAppAcorrer= $app->getEstado();
                if($EstadoAppAcorrer == FALSE) {//la app no se encuentra corriendo actualmente
                    echo 'la app se puede correr'. "\n";
                    $app->run($this);
                    echo 'la bateria actual es de '.$this->getBateria();
                    $app->stop($this);
                }
            }  else {
                echo 'el dispositivo no tiene bateria suficiente para correr la app'. "\n";    
            }
            
        }
        else{
            echo 'la app no se encuentra instalada'. "\n";
        }
        
        
          
         
            
        }
        
        
    }
    






    $tablet= new Device();
    $App1=new App('pupo',50,1543);
    $App2=new App('pupo2',75,1543);
    $App3=new App('el tercero',50,16000);
    echo $tablet->instalarApp($App2);
    echo$tablet->instalarApp($App1);
    $tablet->correrApp($App2);
    
    
    
    

