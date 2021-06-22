<?php

    abstract class Barn {
        private static $products = [];

        static private function isProductExist($infoAboutAnimal) {
            for ($index=0; $index < count($infoAboutAnimal); $index++) { 
                if($infoAboutAnimal[$index - 1]["product"] === $infoAboutAnimal[count($infoAboutAnimal) - 1]["product"]) {
                    return true;
                }
            }
            return false;
        }

        static public function addNewProduct($infoAboutAnimal) {
            
            // Но добавляем новый продукт лишь при условии, что такого продукта ранее ещё НЕ было
            if(!self::isProductExist($infoAboutAnimal)) {
                self::$products[] = ['product' => $infoAboutAnimal[count($infoAboutAnimal) - 1]["product"],
                                    'count' => 0];
            }
        }

        static public function addCollectedProducts($animals) {            
            for ($indexProduct=0; $indexProduct < count(self::$products); $indexProduct++) { 
                for ($indexAnimal=0; $indexAnimal < count($animals); $indexAnimal++) { 
                    if(self::$products[$indexProduct]['product'] === $animals[$indexAnimal]->getProduct()){
                        self::$products[$indexProduct]['count'] += $animals[$indexAnimal]->getProfit();
                    }
                }
            }
        }

        static public function getInfo(){
            for ($i=0; $i < count(self::$products); $i++) { 
                echo self::$products[$i]['product'] . ". Количество: " . self::$products[$i]['count'] . "<br>";
            }
        }
        
    }
    
?>