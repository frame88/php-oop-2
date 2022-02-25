<?php

//aggiungo caratteristiche non comuni a tutti i modelli di moto
trait MotoAttribute
    {
        protected $color;
        protected $baulettoPosteriore;
        protected $valigieLaterali;
        protected $keyless;
        protected $antifurto;

        /**
         * Get the value of color
         */ 
        public function getColor()
        {
                return $this->color;
        }

        /**
         * Set the value of color
         *
         * @return  self
         */ 
        public function setColor($color)
        {
                $this->color = $color;

                return $this;
        }

        /**
         * Get the value of baulettoPosteriore
         */ 
        public function getBaulettoPosteriore()
        {
                return $this->baulettoPosteriore;
        }

        /**
         * Set the value of baulettoPosteriore
         *
         * @return  self
         */ 
        public function setBaulettoPosteriore($baulettoPosteriore)
        {
                $this->baulettoPosteriore = $baulettoPosteriore;

                return $this;
        }

        /**
         * Get the value of valigieLaterali
         */ 
        public function getValigieLaterali()
        {
                return $this->valigieLaterali;
        }

        /**
         * Set the value of valigieLaterali
         *
         * @return  self
         */ 
        public function setValigieLaterali($valigieLaterali)
        {
                $this->valigieLaterali = $valigieLaterali;

                return $this;
        }

        /**
         * Get the value of keyless
         */ 
        public function getKeyless()
        {
                return $this->keyless;
        }

        /**
         * Set the value of keyless
         *
         * @return  self
         */ 
        public function setKeyless($keyless)
        {
                $this->keyless = $keyless;

                return $this;
        }

        /**
         * Get the value of antifurto
         */ 
        public function getAntifurto()
        {
                return $this->antifurto;
        }

        /**
         * Set the value of antifurto
         *
         * @return  self
         */ 
        public function setAntifurto($antifurto)
        {
                $this->antifurto = $antifurto;

                return $this;
        }
    }