<?php

    class Cow extends Animal {
        public function __construct() {
            $this->setId();            
            $this->setProduct();           
            $this->setType();            
        }  
        
        public function collectProfit() {
            $this->setProfit();
        }

        protected function setId() {
            $this->id = ++parent::$countOfAnimals;
        }

        public function getId() {
            return $this->id;
        }

        protected function setType() {
            $this->type = 'Коровы';
        }

        public function getType() {
            return $this->type;
        }

        protected function setProduct() {
            $this->product = 'Молоко';
        }

        public function getProduct() {
            return $this->product;
        }

        protected function setProfit() {
            $this->profit = rand(8, 12);
        }

        public function getProfit() {
            $temp = $this->profit;   
            $this->profit = NULL;   
            return $temp;
        }
    }
