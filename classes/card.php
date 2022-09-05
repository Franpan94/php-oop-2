<?php

include __DIR__ . '/products.php';

class cards extends products {

    public function __construct($_name, $_type, $_genre){
        
        parent:: __construct($_name, $_type, $_genre);
    
    }

}