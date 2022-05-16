<?php   

namespace Alura\Leilao\Service;

use Alura\Leilao\Model\Leilao;

class Avaliador
{
    private $maiorValor;
        
    public function avalia(Leilao $leilao): void
    {
        $lance = $leilao->getLance();
        $ultimoLance = $lance[count($lance) -1];
        $this->maiorValor = $ultimoLance->getValor();
    }
                
    public function getmaiorValor(): float
    {
        return $this ->maiorValor;
    }
    
}

  