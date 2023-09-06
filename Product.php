<?php
// Classe prodotto
class Product {
    public $image;
    public $title;
    public $price;
    public $typology;

    // Costruttore
    public function __construct(string $image, 
    string $title, 
    float $price, 
    string $typology)
    {
        $this->image = $image;
        $this->title = $title;
        $this->price = $price;
        $this->typology = $typology;

        // Exception sul prezzo 
        if ($price > 0 ) {
        $this->price = $price; }
        else {
            throw new Exception('Prezzo non valido');
        }
    } 
}

// Estensioni della classe prodotto 
class DogGame extends Product {
    use DogCategory;
}
class CatGame extends Product {
    use CatCategory;
}
class DogFood extends Product {
    use DogCategory;
}
class CatFood extends Product {
    use CatCategory;
}
class DogBed extends Product {
    use DogCategory;
}
class CatBed extends Product {
    use CatCategory;
}
// Traits con la categoria 
trait DogCategory {
    public $icon = '🐶';
}
trait CatCategory {
    public $icon = '🐱';
}