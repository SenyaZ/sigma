<?php


class Animal{
    protected $food;
    protected $location;

    public function makeNoise(){
        print_r("Voise");
    }
    public function eat(){
        print_r("eat something");
    }
    public function sleep(){
        print_r("така тварина спить");
    }
};

class Dog extends Animal{
    protected $food = "Meat";
    protected $animal = "Dog";
    public function makeNoise(){
        print_r("Gav");
    }
    public function eat(){
        print_r($this->food);
    }
    public function sleep(){
        print_r($this->animal + "тварина спить");
    }


}
    class Cat extends Animal{
        protected $animal = "Cat";
        protected $food = "fish";
        public function makeNoise(){
            print_r("Myay");
        }
        public function eat(){
            print_r($this->food);
        }
        public function sleep(){
            print_r($this->animal + "тварина спить");
        }

    }
    class Horse extends Animal{
        protected $animal = "Horse";
        protected $food = "apples";
        public function makeNoise(){
            print_r("Gi");
        }
        public function eat(){
            print_r($this->food);
        }
        public function sleep(){
            print_r($this->animal + "тварина спить");
        }
    }


    class Vet{

    function treatAnimal(Animal $animal){
        $animal->makeNoise();
        $animal->eat();
//        $animal->sleep();
    }
    
}

$animals = [];
$animals[0] = new Dog();
    $animals[1] = new Cat();
    $animals[2] = new Horse();


    for ($i=0;$i<3;$i++){
        $vet = new Vet();
        $vet->treatAnimal($animals[$i]);
    }











