<?php

class Loyaltycard
{
    protected $sale;
    // protected $score;
    protected $id;

    // public function __construct($sale, $score) {
    //     $this->setSale($sale);
    // }


    public function getSale() {
        return $this->sale;
    }
    public function setSale($sale) {
        if ($score < 5000) {
            $this->sale = 5;
        }
        else if ($score < 10000 && $score > 5000) {
            $this->sale = 10;
        }
        else if ($score > 10000) {
            $this->sale = 20;
        }
        return $this;
    }




}
?>