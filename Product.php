<?php

class Product {
    public $image;
    public $title;
    public $price;
    public $category;
    public $typology;

    public function __construct($image, $title, $price, $category, $typology)
    {
        $this->image = $image;
        $this->title = $title;
        $this->price = $price;
        $this->category = $category;
        $this->typology = $typology;
    }

    public function getTitle() {
        return $this->title;
    }
    public function getImage() {
        $this->image;
    }
    public function getPrice() {
        $this->price;
    }
    public function getCategory() {
        $this->category;
    }
    public function getTypology() {
        $this->typology;
    }
}
class DogGame extends Product {

}
class DogFood extends Product {

}
class DogBed extends Product {

}
class CatGame extends Product {

}
class CatFood extends Product {

}
class CatBed extends Product {

}