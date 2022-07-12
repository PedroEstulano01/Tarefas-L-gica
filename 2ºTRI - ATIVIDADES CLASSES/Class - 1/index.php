<?php

include ('Produtos.php');

class Vendas{ //Criação de classe Vendas
    public $produto;
    public $valorUn;
    public $valor;
    public $tipoVenda;
    
    

    public function calcular(){ //Função para calcular produto + valor total deste.
        $valor = 0;
        for($u=0; $u<=2; $u++){
            $this->valor = $this->produto[$u]->valorTotal + $this->valor;
        }
    }

    public function gerarProdutos(){ //Criação dos produtos de forma que seja uma hierarquia organizada.
        $produto1 = new Produtos();
        $produto1->id = 1;
        $produto1->nome = 'Café';
        $produto1->valor = 3;
        $produto1->quant = 6;
        $produto1->valorCalc();
        //
        $produto2 = new Produtos();
        $produto2->id = 2;
        $produto2->nome = 'Banana';
        $produto2->valor = 7;
        $produto2->quant = 8;
        $produto2->valorCalc();
        //
        $produto3 = new Produtos();
        $produto3->id = 3;
        $produto3->nome = 'CARRO';
        $produto3->valor = 600;
        $produto3->quant = 21;
        $produto3->valorCalc();
        //
        $produto4 = new Produtos();
        $produto4->id = 4;
        $produto4->nome = 'BUFÁLO';
        $produto4->valor = 9000;
        $produto4->quant = 1;
        $produto4->valorCalc();
        //
        $this->produto[0] = $produto1; //Validação deste produto para ser mostrado.
        $this->produto[1] = $produto2;
        $this->produto[2] = $produto3;
        $this->produto[3] = $produto4;
    }

    public function mostraVendas(){ //mostrando resultado.

        echo '<br><table ><tr > 
        <td><strong>Nome</strong></td>
        <td><strong>Valor Un</strong></td>
        <td><strong>Quant</strong></td>
        <td><strong>Valor Total</strong></td>
        </tr>'; //tabelinha para organização de melhor visibilidade.

        for($u=0; $u<(count($this->produto)); $u++){ //pegando os produtos e seus atributos para ser mostrado em pag.
            echo '<tr><td>'.$this->produto[$u]->nome.'</td>';
            echo '<td>'.$this->produto[$u]->valor.'</td>';
            echo '<td>'.$this->produto[$u]->quant.'</td>';
            echo '<td>'.$this->produto[$u]->valorTotal.'</td>';
            
        }
        
        
    }

}

$va1 = new Vendas(); //criação de uma instância de classe, sendo uma para gerarProdutos outra para Mostrar Vendas e uma última para Calcular.
$va1->gerarProdutos();
$va1->mostraVendas();
$va1->calcular();
echo '<h3>Valor Total: '.$va1->valor.'</h3><br><hr>'; //imprimir valor total deste.




?>