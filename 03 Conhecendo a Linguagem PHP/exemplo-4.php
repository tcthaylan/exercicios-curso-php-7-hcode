<?php

$a = (int)$_GET["a"];
$b = (float)$_GET["b"];

var_dump($a);
var_dump($b);

$ip = $_SERVER["REMOTE_ADDR"];
var_dump($ip);
?>