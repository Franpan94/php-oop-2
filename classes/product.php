<?php

class product {

    protected $price;

    public function __construct($_name, $_type, $_genre, $_price){
        
        $this -> name = $_name;
        $this -> type = $_type;
        $this -> genre = $_genre;
        $this -> price = $_price;
    
    }

    public function getname(){

        return $this -> name;
  
     }
  
     public function setname($_name){
  
        $this -> name = $_name;

    }  
    
    public function getype(){

        return $this -> type;
  
     }
  
     public function setype($_type){
  
        $this -> type = $_type;

    }  

    public function getgenre(){

        return $this -> genre;
  
     }
  
     public function setgenre($_genre){
  
        $this -> genre = $_genre;

    }    
  

    public function getPrice(){

        return $this -> price;
  
     }
  
     public function setPrice($_price){
  
        $this -> price = $_price;
  
     }
}