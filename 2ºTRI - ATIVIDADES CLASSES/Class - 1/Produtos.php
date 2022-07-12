<?php

class Produtos{ //Criação da classe produtos.
    public $id; //atributos🔽
    public $nome; 
    public $valor; 
    public $quant; 
    public $calcvalor; 
    public $valorTotal; 

    public function valorCalc(){ //1º metodo desta classe, aonde este vai calcular o valor total, sendo que este é = $valor * $quant
        $valor = $this->valor;
        $quant = $this->quant;
        $this->valorTotal = $valor * $quant;
    }
}

?>