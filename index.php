<?php

//a class is a blueprint / mould / pattern / factory for objects
class Product{
    //properties - is a variable
    public $price = 2;
    public $color = "Green";
    public $total = 0;
    // example accessors: public, private, protected and static

    //methods - is a function
    public function calculate_total(){
        $this->total = 10 * 20;
    }

    static function generate_id(){
        return rand(0,9999);
    }

    private function read(){
        return $this->calculate_total();
    }
}

$book = new Product();  //this is an instance - instantiation - versions of their parent ' Product'
echo "book " . $book->price;
echo "<br>";
echo $book->calculate_total();
echo "<br>";

$phone = new Product(); //instantiation
echo "phone " . $phone->price = 5;
echo "<br>";

$laptop = new Product();//
echo "laptop " . $laptop->price = 50;
echo "<br>";

//If you want to use a function without instantiation, we can call the function within the class like this:

$number = Product::generate_id();
echo "Random number: " .$number;

// $number = Product::$price;
// echo "the price ".$number;