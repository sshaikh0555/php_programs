<?php
class Fruit {
  
    public $name;
    public $color;
    public $price;

    public function setDetails($name, $color, $price) {
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
    }

    
    public function displayDetails() {
        echo "Fruit Name: " . $this->name . "\n";
        echo "Fruit Color: " . $this->color . "\n";
        echo "Fruit Price: " . $this->price . "\n";
    }
}

$fruit = new Fruit();

$fruit->setDetails("Apple", "Red", 150);

$fruit->displayDetails();
?>
