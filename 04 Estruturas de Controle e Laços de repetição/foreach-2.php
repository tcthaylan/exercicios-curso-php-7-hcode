<form>
    <input type="text" name="nome">
    <input type="date" name="nascimento">
    <input type="submit" value="Ok">
</form>

<?php

foreach ($_GET as $key => $value) {
    
    echo $key . ': ' . $value;
    echo '<br>';
}


?>