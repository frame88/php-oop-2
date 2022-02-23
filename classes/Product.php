<?php 

class Product 
{
    protected $name;
    protected $price;
    protected $description;
    protected $type;
    protected $brand;


    public function __construct($name, $price, $brand )
    {
        try {
            $this->name = $name;
            $this->brand = $brand;
            $this->setPrice($price);
        } catch (\TypeError $e) {
            throw new Exception($e->getMessage());
            
        }
        
    }
    


    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }


    /**
     * Get the value of productPrice
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of productPrice
     *
     * 
     */ 
    public function setPrice(float $price)
    {
        if($price < 99000)
        {
            throw new Exception("Credito insufficiente");
        }
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of brand
     */ 
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set the value of brand
     *
     * @return  self
     */ 
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }
}


?>