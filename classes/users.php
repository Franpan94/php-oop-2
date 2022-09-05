<?php

class users {

   protected $name;
   protected $type;

   public function __construct($_name, $_type){
    
        $this -> name = $_name;
        $this -> type = $_type;

   }

   public function getName(){

      return $this -> name;

   }

   public function setName($_name){

      $this -> name = $_name;

   }

   public function getType(){

      return $this -> type;

   }

   public function setType($_type){

      $this -> type = $_type;
      if($_type === 'Utente registrato'){

      }

   }


}

