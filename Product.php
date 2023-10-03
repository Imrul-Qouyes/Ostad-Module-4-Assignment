<?php

class Product
{

  public int $id;
  public string $name;
  public float $price;

  public function __construct($id, $name, $price)
  {

    $this->id = $id;
    $this->name = $name;
    $this->price = $price;
  }

  public function getFormattedPrice()
  {

    return (strval(number_format(($this->price), 2, '.', '')));

  }


  public function showDetails()
  {
    echo ("Product Details: \n- ID: {$this->id} \n- Name: {$this->name}  \n- Price: \${$this->getFormattedPrice()}");
  }
}


$product = new Product(1, 'T-Shirt', 19.99);
$product->showDetails();
