<?php

use Alura\Leilao\Model\Leilao;
use Alura\Leilao\Model\Usuario;
use Alura\Leilao\Model\Lance;
use Alura\Leilao\Service\Avaliador;

require 'vendor/autoload.php';

$leilao = new Leilao(descricao:'Fiat 147 0km');
$maria = new Usuario(nome:'Maria');
$joao = new Usuario(nome:'João');

$leilao->recebeLance(new Lance($joao, valor:2000));
$leilao->recebeLance(new Lance($maria, valor:25000));

$leiloeiro = new Avaliador();
$leiloeiro->avalia($leilao);

$maiorValor = $leiloeiro->getmaiorValor();

echo $maiorValor;






