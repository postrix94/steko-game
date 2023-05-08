<?php


namespace App\Interfaces;


interface IGame
{
    const REG_EXP_RATE_VALUE = "/^[0-9]+:[0-9]+$/";

    public function startGame(): int;

    public function setResultMatch(string $resultMatch): void;

    public function setBid(string $bid):void;
}