<?php
namespace ProductsApp;
class Student{
    public $klase;
    public $kodas;
    public $date;
    public $vardas;
    public $pavarde;
    public $vertinimai;

    public function __construct($klase, $kodas, $date, $vardas, $pavarde, $vertinimai){
        $this->klase = $klase;
        $this->kodas = $kodas;
        $this->date = $date;
        $this->vardas = $vardas;
        $this->pavarde = $pavarde;
        $this->vertinimai = $vertinimai;

    }
    public function showStudent(){
        return [
            $this->klase,
            $this->kodas,
            $this->date,
            $this->vardas,
            $this->pavarde,
            $this->vertinimai
        ];
    }
}