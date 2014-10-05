<table>
    
        
<?php

class Calculator{
    public $param1;
    public $param2;
    public $resultado;
    
    public function  Calculator($param1,$param2){
        $this->param1=$param1;
        $this->param2=$param2;
        $this->resultado=0;
    }
    public function setParam1($param1){
        $this->param1=$param1;
    }
    public function getParam1(){
        return $this->param1;
    }
    public function setParam2($param2){
        $this->param2=$param2;
    }
    public function getParam2(){
        return $this->param2;
    }
    
    public function setResultado($resultado){
        $this->resultado=$resultado;
    }
    public function getResultado(){
        return $this->resultado;
    }
    public function sumar(){
        $resPrevio= $this->getParam1()+$this->getParam2();
        $this->setResultado($resPrevio);
        echo $this->getParam1().'+'.$this->getParam2().'='.$resPrevio;
    }
    public function restar(){
        $resPrevio= $this->getParam1()-$this->getParam2();
        $this->setResultado($resPrevio);
        echo $this->getParam1().'-'.$this->getParam2().'='.$resPrevio;
    }
    public function division(){
        if ($this->getParam2()<1) {
            echo'error en el calculo no se puede calcular '.$this->getParam1().'/'.$this->getParam2();
            
        }  else {
            $resPrevio= $this->getParam1()/$this->getParam2();
            $this->setResultado($resPrevio);
            echo $this->getParam1().'/'.$this->getParam2().'='.$resPrevio;
        }
        
    }
    public function multiplicacion(){
        $resPrevio= $this->getParam1()*$this->getParam2();
        $this->setResultado($resPrevio);
        echo $this->getParam1().'*'.$this->getParam2().'='.$resPrevio;
    }
    public function mostrarUltimo(){
        echo 'el resultado del calculo anterior fue: ';
        echo $this->getResultado();
        
    }
    
}

$pruebaCal= new Calculator(2,3);

echo'<tr><td>';
$pruebaCal->sumar();
echo'</td></tr>';
echo'<tr><td>';
$pruebaCal->mostrarUltimo();
echo'</td></tr>';
echo'<tr><td>';
$pruebaCal->restar();
echo'</td></tr>';
echo'<tr><td>';
$pruebaCal->mostrarUltimo();
echo'</td></tr>';
echo'<tr><td>';
$pruebaCal->multiplicacion();
echo'</td></tr>';
echo'<tr><td>';
$pruebaCal->mostrarUltimo();
echo'</td></tr>';
echo'<tr><td>';
$pruebaCal->division();
echo'</td></tr>';
echo'<tr><td>';
$pruebaCal->mostrarUltimo();
echo'</td></tr>';
?>
    
</table>
