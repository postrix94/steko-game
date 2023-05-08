<?php


namespace App;

use App\Interfaces\IGame;
use App\Traits\TGame;

class Game implements IGame
{
    use TGame;

    private int $bidCommandA;
    private int $bidCommandB;
    private int $resultCommandA;
    private int $resultCommandB;

    public function __construct(string $bid,string $resultMatch)
    {
        $this->setBid($bid);
        $this->setResultMatch($resultMatch);
    }

    public function startGame(): int
    {
        if($this->isCorrectScore()) {
            return 2;
        }else if($this->isMatchOutcome()) {
            return 1;
        }

       return 0;
    }

}