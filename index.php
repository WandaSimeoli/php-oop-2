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
}

