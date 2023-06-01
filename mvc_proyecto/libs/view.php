<?php
//clase que permite el redericionamiento de las vistas

class view{

    function __construct()
    {
        
    }

    function render($nombre){
        require 'view/'.$nombre.'php';
    }
}

?>