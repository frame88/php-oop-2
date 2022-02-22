<?php 
//creazione istanza
class User {
    //attributi
    protected $name;
    protected $lastname;
    protected $age;
    protected $payment;
    protected $score;

    
public function __construct($name, $age, $score)
{
    //dati obbligatori per la creazione di un nuovo oggetto user
    $this->setName($name);
    $this->setAge($age);
    $this->setScore($score);
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

    public function getScore() {
        return $this->score;
    }
    public function setScore($score) {
        if ($score < 5000) {
            $this->sale = 5;
            $this->score += 50;
        }
        else if ($score < 10000 && $score > 5000) {
            $this->sale = 10;
            $this->score += 100;
        }
        else if ($score > 10000) {
            $this->sale = 20;
            $this->score += 150;
        }
        return $this;
    }

}
?>