<?php

class Carro {

    private $modelo;
    private $motor;
    private $ano;

    public function getModelo(){
        
        return $this->modelo;

    }

    public function setModelo($input){

        $this->modelo = $input;

    }

    public function getMotor():float{
        
        return $this->motor;

    }

    public function setMotor($input){

        $this->motor = $input;
        
    }

    public function getAno():int{
        
        return $this->ano;

    }

    public function setAno($input){

        $this->ano = $input;
        
    }

    public function exibir(){

        return array(
            "modelo"=>$this->getModelo(),
            "motor"=>$this->getMotor(),
            "ano"=>$this->getAno()
        );

    }

}
//fechando a classe Carro



$car = new Carro;

$car->setModelo("Gol");
$car->setAno("2015");
$car->setMotor("1.6");


var_dump($car->exibir());

?>