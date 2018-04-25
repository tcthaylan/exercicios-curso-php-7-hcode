<?php

require_once("config.php");

echo session_id();

echo session_regenerate_id();

var_dump($_SESSION);
?>