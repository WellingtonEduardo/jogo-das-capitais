<?php

session_start();



$route = $_GET["route"] ?? "start";

$script = match ($route) {
    "start" => "start" ,
    "game" => "game" ,
    "gameOver" => "gameOver" ,
    default => "404"
};


$capitals = require __DIR__ . "/../data/capitals.php";

var_dump($capitals);
