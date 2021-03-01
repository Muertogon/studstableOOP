<?php
namespace ProductsApp;
class Product{
    public $title;
    public $count;
    public $price;
    public $comment;

    //konstruktorius
    public function __construct($title, $count, $price){
        $this->title = $title;
        $this->count = $count;
        $this->price = $price;
    }
    //setter  nustato ypatybiu reiksmes
    public function addTitle($title){
        $this->title = $title;
    }
    public function addCount($count){
        $this->count = $count;
    }
    public function addPrice($price){
        $this->price = $price;
    }
    //getter grazina ypatybiu savybes

    public function showProduct(){
        return [
            $this->title,
            $this->count,
            $this->price
        ];
    }
}
