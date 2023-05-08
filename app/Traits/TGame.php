<?php


namespace App\Traits;


trait TGame
{

    public function setBid(string $bid): void
    {
        if (!$this->isValidateValue($bid)) {
            throw new \ErrorException("Вы ввели не верный формат ставки. Введите в таком формате: 1:1");
        }

        list($this->bidCommandA, $this->bidCommandB) = $this->parseGameScore($bid);
    }

    public function setResultMatch(string $resultMatch): void
    {
        if (!$this->isValidateValue($resultMatch)) {
            throw new \ErrorException("Вы ввели не верный формат результата матча. Введите в таком формате: 1:1");
        }

        list($this->resultCommandA, $this->resultCommandB) = $this->parseGameScore($resultMatch);
    }

    private function parseGameScore(string $score): array
    {
        return (explode(':', $score));
    }

    private function isValidateValue(string $chek): bool
    {
        return preg_match(static::REG_EXP_RATE_VALUE, $chek);
    }

    private function isCorrectScore():bool
    {
      if (($this->bidCommandA === $this->resultCommandA) && ($this->bidCommandB === $this->resultCommandB)) {
            return true;
        }
        return false;
    }

    private function isMatchOutcome(): bool
    {
        if (($this->bidCommandA === $this->bidCommandB) && ($this->resultCommandA === $this->resultCommandB)) {
            return true;
        } else if (($this->bidCommandA < $this->bidCommandB) && ($this->resultCommandA < $this->resultCommandB)) {
            return true;
        }else if (($this->bidCommandA > $this->bidCommandB) && ($this->resultCommandA > $this->resultCommandB)) {
            return true;
        }

        return false;
    }
}