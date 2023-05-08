<?php
require __DIR__ . '/vendor/autoload.php';
use App\Game;

$game = new Game("1:1", "0:1");
$result = $game->startGame();

echo $result;


