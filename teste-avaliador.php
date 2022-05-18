<?php

use Alura\Leilao\Model\Leilao;
use Alura\Leilao\Model\Usuario;
use Alura\Leilao\Model\Lance;
use Alura\Leilao\Service\Avaliador;

require 'vendor/autoload.php';

// Organização do código para o teste;
$leilao = new Leilao(descricao:'Fiat 147 0km');
$maria = new Usuario(nome:'Maria');
$joao = new Usuario(nome:'João');

$leilao->recebeLance(new Lance($joao, valor:2000));
$leilao->recebeLance(new Lance($maria, valor:2500));

$leiloeiro = new Avaliador();

// Executo o código a ser testado;
$leiloeiro->avalia($leilao);

$maiorValor = $leiloeiro->getmaiorValor();

// Verifico se a saída é a esperada;
$valorEsperado = 2500;

if($valorEsperado == $maiorValor){
    echo 'TESTE OK';
}else {
    echo 'TESTE FALHOU!';
}






