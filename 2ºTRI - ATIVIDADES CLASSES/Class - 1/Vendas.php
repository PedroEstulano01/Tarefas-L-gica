<?php

class Vendas{ //criação da classe "VENDAS"📊
    public $produtos;
    public $valor;
    private $nprod = 0;

    public function mostrar(){ //função que vai ser usada para aparecer os resultados do produto, valor úncio, quantidade e TOTAL  deste produto.🔽
        echo "Valor Venda :" . $this-> valor . "<br>";
        for ($i = 0; $i < $this->nprod; $i++){
            echo "Produto:" . $this->produtos[$i]->nome .
            " Valor Único:" . $this -> produtos[$i]->valor .
            " QUantidade: " . $this->produtos[$i]->qtd .
            "Total:" . $this->produtos[$i]->total . "<br>";
        }
    }

    public function calcValor(){ //CALCULAR O VALOR DO PRODUTO COM O TOTAL.✅
        $this->valor = 0;
        for ($i = 0; $i<$this->nprod; $i++){
            $this->valor += $this->produtos[$i]->total; 
        }
    }

    public function gerarP(){       //geração de produtos em ordem que possa ficar visivel e sem bagunça.🔽
        $PROD1 = new Produto();
        $PROD1->id = 1;   
        $PROD1->nome = "Leite";        
        $PROD1->valor = 5;
        $PROD1->qtd = 2;                $this->nprod++;              
         $PROD1->calcular();

        $PROD2 = new Produto();
        $PROD2->id = 2;                
        $PROD2->nome = "Canetas";            
        $PROD2-> valor = 6;
        $PROD2-> qtd = 2;              
        $PROD2->calcular();                 $this->nprod++;

        $PROD3 = new Produto();       
         $PROD3->id = 3;                    
         $PROD3->nome = "Bike";
        $PROD3->valor = 200;        
         $PROD3-> qtd = 2;                 
          $PROD3->calcular();   $this-> nprod;

        $PROD4 = new Produto();        
        $PROD4-> id = 4;                 
        $PROD4->nome = "Banana";
        $PROD4-> valor = 6;            
        $PROD4-> qtd = 78;
        $PROD4-> calcular();              $this->nprod++;

        $this->produtos[0] = $PROD1 ; //🛑Validação para ser puxado o valor do produto 1 e assim por diante. (sem está validação não ira funfar.) 🛑
        $this->produtos[1] = $PROD2 ;
        $this->produtos[2] = $PROD3 ;
        $this->produtos[3] = $PROD4 ;      
    }


}

?>