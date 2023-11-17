<?php
    class funcionario{
        public $nome;
        public $salario;
        public $previdencia;
        public $descontos;
        //funçao construtora
        function __construct($input_nome, $input_salario, $input_previdencia)
        {
            $this->nome = $input_nome;
            $this->salario = $input_salario;
            $this->previdencia = $input_previdencia;
            $this->descontos = $this->calcular_descontos();
        }

        function calcular_descontos(){
            return round($this->salario*0.15 + $this->previdencia,2);
        }

    }//class

    $funcionarios = array();
    $funcionarios [0] = new funcionario("João",1000,100);
    $funcionarios [1] = new funcionario("Pedro",2000,200);
    $funcionarios [2] = new funcionario("Miranda",3000,300);

    for ($i=0; $i < count($funcionarios); $i++) { 
        $colaborador = $funcionarios[$i];
        echo"<p>O Valor do desconto de".$colaborador->nome." é R$".$colaborador->descontos."</p>";
    }
?>