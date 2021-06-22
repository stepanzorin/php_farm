<?php

    abstract class Animal {
        protected static $countOfAnimals = 0; // общее количество ВСЕХ животных на фереме
        
        protected static $id; // id текущего животного на ферме
        protected $type; // тип текущего животного на ферме
        protected $product; // единица, которую отдает текущее животное
        protected $profit; // итоговая прибыль после сбора (по умолчанию NULL)
        
        abstract public function collectProfit();        

        abstract protected function setId();
        abstract public function getId();

        abstract protected function setType();
        abstract public function getType();

        abstract protected function setProduct();
        abstract public function getProduct();

        abstract protected function setProfit();
        abstract public function getProfit();
    }

?>