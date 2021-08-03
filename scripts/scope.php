<?php

$globalVar = 'hello';

function first() {
    $localVar = 'world';

    function second() {
        global $globalVar;
        global $localVar; // not 'world'

        var_dump($globalVar);
        var_dump($localVar);
    }

    second();
}

first();
