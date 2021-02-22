<?php
//Create a "product"-class, the class should contain;
//name, price, category, articlenumber, description
//it should aslo contain functions like;
//-get and set all variables 
//-calculate the price including taxes

class Product {
private $name;
private $price;
private $category;
private $articleNumber; 
private $description; 

function set_name($name) {
    $this->name = $name;
}

function get_name() {
    return $this->name; 
}

function set_price($price) {
    $this->price = $price;
}

function get_price() {
    return $this->price;
}

function set_category($category) {
    $this->category = $category;
}

function get_category() {
    return $this->category;
}

function set_articleNumber($articleNumber) {
    $this->articleNumber = $articleNumber;
}

function get_articleNumber() {
    return $this->articleNumber;
}

function set_description($description) {
    $this->description = $description;
}

function get_description() {
    return $this->description; 
}
}

//testing to set variables
$sneakers = new Product();
$sneakers->set_name("Nike Air Force");
$sneakers->set_price("999");
$sneakers->set_category("Shoes");
$sneakers->set_articleNumber("1001");
$sneakers->set_description("White sneakers with silver details");

//testing to get variables
echo $sneakers->get_name() . " " . $sneakers->get_price() . " " . $sneakers->get_category() . " " . 
$sneakers->get_articleNumber() . " " . $sneakers->get_description();
?>