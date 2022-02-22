<?php

class Scooter {

    protected $brand;
    protected $plate;   //targa
    protected $displacement;    //cilindrata
    protected $hp;  //cavalli
    protected $productionyear;   //anno di produzione


public function __construct($brand, $plate)
{
    $this->setBrand($brand);
    $this->setPlate($plate);
}



public function getBrand() {
    return $this->brand;
}
public function setBrand($brand) {
    $this->brand = $brand;
    return $this;
}

public function getPlate(){
    return $this->plate;
}
public function setPlate($plate){
    $this->plate = $plate;
    return $this;
}

public function getDisplacement(){
    return $this->displacement;
}
public function setDisplacement($displacement){
    $this->displacement = $displacement;
    return $this;
}

public function getHp(){
    return $this->hp;
}
public function setHp($hp){
    $this->hp = $hp;
    return $this;
}

public function getProductionyear(){
    return $this->productionyear;
}
public function setProductionyear($productionyear){
    $this->productionyear = $productionyear;
    return $this;
}
}
?>