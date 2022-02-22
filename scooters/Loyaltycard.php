<?php

class Loyaltycard
{
    protected $sale;
    // protected $score;
    protected $id;

    public function __construct($sale, $score) {
        $this->setSale($sale);
        $this->setScore($score);
    }

    public function getSale(){
        return $this->sale;
    }
    public function setSale($sale){
        $this->sale = $sale;
        return $this;
    }





}
?>