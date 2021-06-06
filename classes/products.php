<?php 

class Products {
    public $name;
    public $genre;
    public $price;

    function __construct($name, $genre, $price) {
        $this->name = $name;
        $this->genre = $genre;
        $this->price = $price;
    }
}

class Vip_product extends Products {
    public $vip_price;
    public $available;

    function __construct($name, $genre, $price) {
        parent::__construct($name, $genre, $price);
    }

    public function get_vip_price() {
            return $this->vip_price = $this->price - ($this->price * 20 / 100);
    }
}

$product1 = new Vip_product('The last of Us', 'Action/Adventure', 50);
$product2 = new Vip_product('Kingdom Hearts', 'Action/Adventure', 75);
$product3 = new Vip_product('Monster Hunter', 'Action', 120);
$product4 = new Vip_product('Assetto Corso', 'Racing', 150);
$product5 = new Vip_product('Assassins Creed', 'Action/Stealth', 100);

?>