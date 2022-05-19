<?php

    class Product{
        protected $id;
        protected $name;
        protected $description;
        protected $price;
        protected $counts;
        protected $image;

        public function __construct($id,$name,$description,$image,$price,$counts)
        {
            $this->id = $id;
            $this->name = $name;
            $this->description = $description;
            $this->price = $price;
            $this->counts = $counts;
            $this->image = $image;
        }
        public function getId(){
            return $this->id;
        }
        public function getName(){
            return $this->name;
        }
        public function getDescription(){
            return $this->description;
        }
        public function getPrice(){
            return $this->price;
        }
        public function getCounts(){
            return $this->counts;
        }
        public function getImage(){
            return $this->image;
        }
        public function sellProd(){
            $this->counts =  $this->counts - 1;
        }


    }

