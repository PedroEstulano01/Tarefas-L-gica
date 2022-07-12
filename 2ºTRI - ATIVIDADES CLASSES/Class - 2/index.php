<?php

//Estilos de vendas
//0 - prazo
//1 - vista
//2 -  prazo pago

include ('Vendas.php');

$ven1 = new Vendas(); //crição da estanciação de classe e assim criando os estilos de vendas, sendo esses: prazo, a vista e a prazo pago.⚔
$ven1->numVenda = 1;
$ven1->tipoVenda = 0;
$ven1->gProdutos();
$ven1->calc();

$ven2 = new Vendas();
$ven2->numVenda = 2;
$ven2->tipoVenda = 2;
$ven2->gProdutos();
$ven2->calc();

$ven3 = new Vendas();
$ven3->numVenda = 3;
$ven3->tipoVenda = 0;
$ven3->gProdutos();
$ven3->calc();

$ven4 = new Vendas();
$ven4->numVenda = 4;
$ven4->tipoVenda = 1;
$ven4->gProdutos();
$ven4->calc();

$ven5 = new Vendas();
$ven5->numVenda = 5;
$ven5->tipoVenda = 1;
$ven5->gProdutos();
$ven5->calc();

$vendas = [];
$vendas[0] = $ven1;
$vendas[1] = $ven2;
$vendas[2] = $ven3;
$vendas[3] = $ven4;
$vendas[4] = $ven5;

$prazo = [];
$vista = [];
$prazopago = [];

for($z=0; $z<5; $z++){ //DEFINIÇÃO DE CADA TIPO DE VENDA E PUXANDO CADA ID PARA CADA UM.
    $tipo = $vendas[$z]->tipoVenda;

    if($tipo == 0){
        array_push($prazo, $vendas[$z]);
    }

    if($tipo == 1){
        array_push($vista, $vendas[$z]);
    }

    if($tipo == 2){
        array_push($prazopago, $vendas[$z]);
    }
}

function mostraDados($vitor){ //mostrando os resultados.
    for($t=0; $t<(count($vitor)); $t++){

        $vitor[$t]->mostraVendas();
    }
}


echo '<h2>Vendas A Prazo</h2>';
mostraDados($prazo);


echo '<h2>Vendas A Vista</h2>';
mostraDados($vista);


echo '<h2>Vendas A Prazo Pagas<h2>';
mostraDados($prazopago);


?>
