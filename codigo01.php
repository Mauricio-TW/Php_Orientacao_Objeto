<?php

    //criar uma classe
    class teste01{
        //atributo (global)
        public $variavel01 = "teste de POO";

        function get_var1(){
            return $this->variavel01;
        }
    }

    //criaçao de um objeto
    $objeto1 = new teste01();
    //usar objeto
    echo "<p style='color:#006677'>".$objeto1 ->get_var1()."</p>"

?>