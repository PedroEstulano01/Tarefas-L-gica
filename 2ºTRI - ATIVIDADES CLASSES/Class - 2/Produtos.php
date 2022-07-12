<?php

class Produtos{ //criação da classe produtos com seus atributos.
    public $id;
    public $nome;
    public $valor;
    public $quant;
    public $calcvalor;
    public $Vtotal;

    public function valor(){
        $valor = $this->valor;
        $quant = $this->quant;
        $this->Vtotal = $valor * $quant;
    }
}

?>