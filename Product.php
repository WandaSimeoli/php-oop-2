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

    public function getProduct() {
        return $this->title.' '.$this->image.' '.$this->price.' '.$this->category.' '.$this->typology;
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