<?php
 
    class Hen extends Animal {
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
            $this->type = 'Курицы';
        }

        public function getType() {
            return $this->type;
        }

        protected function setProduct() {
            $this->product = 'Яйца';
        }

        public function getProduct() {
            return $this->product;
        }

        protected function setProfit() {
            $this->profit = rand(0, 1);
        }

        public function getProfit() {
            return $this->profit;
        }
    }
    
?>