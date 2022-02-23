<?php 

require_once __DIR__ . '/Product.php';

class User extends Product
{
    protected $userName;
    protected $userSurname;
    protected $email;
    protected $age;
    protected $payment;
    protected $score;


    public function __construct($userName, $userSurname) {
        $this->userName = $userName;
        $this->userSurname = $userSurname;
    }

    

    /**
     * Get the value of userName
     */ 
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set the value of userName
     *
     * 
     */ 
    public function setUserName($userName)
    {
        $this->userName = $userName;
        
        return $this;
    }
    
    /**
     * Get the value of userSurname
     */ 
    public function getUserSurname()
    {
        return $this->userSurname;
    }

    /**
     * Set the value of userSurname
     *
     * @return  self
     */ 
    public function setUserSurname($userSurname)
    {
        $this->userSurname = $userSurname;

        return $this;
    }
    
    /**
     * Get the value of age
     */ 
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */ 
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of score
     */ 
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Set the value of score
     *
     * @return  self
     */ 
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }
}



?>