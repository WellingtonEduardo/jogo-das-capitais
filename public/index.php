<?php

session_start();



$route = $_GET["route"] ?? "start";

$script = match ($route) {
    "start" => "start" ,
    "game" => "game" ,
    "gameover" => "gameover" ,
    default => "404"
};


$capitals = require __DIR__ . "/../data/capitals.php";

require_once __DIR__ . "/../scripts/header.php";
require_once __DIR__ . "/../scripts/$script.php";
require_once __DIR__ . "/../scripts/footer.php";
