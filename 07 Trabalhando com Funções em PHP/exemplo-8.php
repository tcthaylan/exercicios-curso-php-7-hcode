<?php

function test($callback){

    //teste lento
    $callback();
}

test(function(){

    echo 'Acabou';
});

?>