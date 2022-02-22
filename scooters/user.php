<?php 
//creazione istanza
class User {
    //attributi
    protected $name;
    protected $lastname;
    protected $age;
    protected $payment;
    protected $punti;

    
public function __construct($name, $age, $punti)
{
    //dati obbligatori per la creazione di un nuovo oggetto user
    $this->setName($name);
    $this->setAge($age);
    $this->setPunti($punti);
}

//get   return $this->esempio;
//set($esempio)     $this->esempio = $esempio;    return $this;  

public function getName()
{
    return $this->name;
}
public function setName($name)
{
    $this->name = $name;
    return $this;
}


public function getLastname()
{
    return $this->lastname;    
}
public function setLastname($lastname)
{
    $this->lastname = $lastname;
    return $this;
}


public function getAge() 
{
    return $this->age;
}
public function setAge($age)
{
    $this->age = $age;
    return $this;
}

public function getPayment()
{
    return $this->payment;
}
public function setPayment($payment)
{
    $this->payment = $payment;
    return $this;
}

public function getPunti()
{
    return $this->punti;
}
public function setPunti($punti)
{
    $this->punti = $punti;
    return $this;
}

}
?>