<?php

class Product {
    public $image;
    public $title;
    public $price;
    public $category;
    public $typology;

    public function __construct(string $image, 
    string $title, 
    float $price, 
    string $category, 
    string $typology)
    {
        $this->image = $image;
        $this->title = $title;
        $this->price = $price;
        $this->category = $category;
        $this->typology = $typology;

        if ($price > 0 ) {
        $this->price = $price; }
        else {
            throw new Exception('Prezzo non valido');
        }
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