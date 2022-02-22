<?php

class Loyaltycard
{
    protected $sale;
    protected $score;
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