<?php
    class Product{
        //Initializing properties
        private int $id;
        private string $name;
        private float $price;

        //public constructor to assign values to properties from the object
        public function __construct($id,$name,$price){
            $this->id = $id;
            $this->name = $name;
            $this->price = $price;
        }
        //private function to get formatted price in string format upto 2 decimal with $ sign
        private function getFormattedPrice(){
            $formattedPrice="$";
            $formatted=number_format($this->price,2);
            $formattedPrice .= $formatted;
            return $formattedPrice;
        }

        //public function to show the details of an object 
        public function showDetails(){
            $priceString = $this->getFormattedPrice();
            $details = "Product Details: \n";
            $details .= "- ID: {$this->id}\n";
            $details .= "- Name: {$this->name}\n";
            $details .= "- Price: {$priceString}\n";
            echo $details;
        }
    }
    //initializing object of product class and sending values as arguments to constructor
    $product = new Product(1, 'T-shirt', 19.99);
    //show details of the object
    $product->showDetails(); 
?>