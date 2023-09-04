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
class Game extends Product {

}
class Food extends Product {

}
class Bed extends Product {

}

$ball = new Game('https://www.shoppypet.com/5455-large_default/ferplast-pa-6060-pallina-per-cani-in-vinile.jpg',
'Ball', '22$', 'Dog', 'game');
// $biscuits = new Food();
// $dogHouse = new bed();

var_dump($ball);