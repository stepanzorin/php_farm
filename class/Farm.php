<?php 

    abstract class Farm {
        private static $animals = [];
        private static $infoAboutAnimal = [];
        private static $countEachAnimal = [];

        static public function addAnimal(Animal $animal) {
            self::$animals[] = $animal;

            self::$infoAboutAnimal[] = ['id' => $animal->getId(),
                                        'type' => $animal->getType(),
                                        'product' => $animal->getProduct(),
                                        'profit' => $animal->getProfit()];
            
            self::calculateCount($animal);
            Barn::addNewProduct(self::$infoAboutAnimal);
        }

        static public function collectAllProducts() {

            if(empty(self::$animals)) {
                echo "Животных в хлеву, к сожалению, нет :(";
            }

            else {            
                foreach (self::$animals as $animal) {
                    $animal->collectProfit();
                }
                Barn::addCollectedProducts(self::$animals);

            } 
        }

        static private function calculateCount($animal) {
            self::$countEachAnimal[$animal->getType()] += 1;
        }

        static public function getInfo() {
            echo "На данный момент: <br>";
            
            foreach (self::$countEachAnimal as $key => $value) {
                echo "{$key}. Количество: {$value} <br>";
            }
        }
    }

?>