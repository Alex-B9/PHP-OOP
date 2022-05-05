<?php

class car{

    public $brand;
    protected $weight;
    protected $country;
    public $km;
    protected $age;

    public function __construct($brand,$weight, $country,$km, $age)
    {
         $this->brand = $brand;
         $this->weight = $weight;
         $this->country = $country;
         $this->km = $km;
         $this->age = $age;

    }
    public function models(){
        if ($this->brand == 'audi'){
            return 'reserved';
        }else{
            return 'free';
        }
    }

    public function type(){
        if ($this->weight < 3500){
            return 'commercial';
        }else{
            return 'utilities';
        }
    }

    public function km(){
        if ($this->km <=100000){
            return 'low';
        }else if ($this->km >= 100001 AND $this->km < 200000){
            return 'middle';
        }else if ($this->km >= 200000){
            return 'hight';
        }else{
            return 'error';
        }
    }

    public function age(){
         $year = date('Y');
        return $year - $this->age;
    }

    public function run(){
    $this->km += 100000;
    }

    public function show(){
        echo $this->models();
        echo $this->km();
        echo $this->age();
    }

    public function display(){
        return "<tr><td> {$this->brand} |</td><td> {$this->models()} |</td><td> {$this->type()} |</td><td> {$this->country} |</td><td> {$this->km} |</td><td> {$this->age()} </td></tr> ";
    }
}