<?php
include ('Produtos.php');

class Vendas{ //Criação da classe Vendas com seus atributos🔽
    public $produto;
    public $numVenda;
    public $valorUn;
    public $valor;
    public $tiposVendas;
    
    

    public function calc(){ //Função para calcular o valor total mais o produto.🔽
        $valor = 0;
        for($i=0; $i<=2; $i++){
            $this->valor = $this->produto[$i]->Vtotal + $this->valor;
        }
    }


    public function gProdutos(){ //Geração dos produtos. 
        $p1 = new Produtos();
        $p1->id = 1;
        $p1->nome = 'Cachaça';
        $p1->valor = 3;
        $p1->quant = 4;
        $p1->valor();
        
        $p2 = new Produtos();
        $p2->id = 2;
        $p2->nome = 'software';
        $p2->valor = 7;
        $p2->quant = 4;
        $p2->valor();

        $p3 = new Produtos();
        $p3->id = 3;
        $p3->nome = 'Maçã';
        $p3->valor = 8;
        $p3->quant = 32;
        $p3->valor();

        $p4 = new Produtos();
        $p4->id = 4;
        $p4->nome = 'Banana';
        $p4->valor = 8;
        $p4->quant = 55;
        $p4->valor();
        $this->produto[0] = $p1;
        $this->produto[1] = $p2;
        $this->produto[2] = $p3;
        $this->produto[3] = $p4;
    }

    public function mostraVendas(){ //mostrando resultados.

        echo '<table ><tr >
        <td><strong>Venda: '.$this->numVenda.' </strong></td>
        
        <td><strong>Nome</strong></td>
        <td><strong>Valor Un</strong></td>
        <td><strong>Quant</strong></td>
        <td><strong>Valor Total</strong></td>
        </tr>';

        for($i=0; $i<(count($this->produto)); $i++){ //resultados dos produtos.
            echo '<tr><td></td><td>'.$this->produto[$i]->nome.'</td>';
            echo '<td>'.$this->produto[$i]->valor.'</td>';
            echo '<td>'.$this->produto[$i]->quant.'</td>';
            echo '<td>'.$this->produto[$i]->Vtotal.'</td>';
            
        }
        
        
    }

}


?>