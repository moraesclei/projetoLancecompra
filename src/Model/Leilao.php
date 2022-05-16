<?php

namespace Alura\Leilao\Model;

class Leilao
{
    /**@var Lance[] */
    private $lance;
    /**@var string */
    private $descricao;

    public function __construct(string $descricao)
    {
        $this->descricao = $descricao;
        $this->lance = [];
    }

    public function recebeLance(Lance $lance)
    {
        $this->lance[] = $lance;
    }

    /*
     @return Lance[]
     */
    public function getLance(): array
    {
        return $this->lance;
    }
}
