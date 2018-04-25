<?php

for ($i = 0; $i < 2000; $i += 5) { 
    
    if ($i > 200 && $i < 800) continue;

    if ($i === 1300) break;

    echo $i . "<br>";
}

?>
