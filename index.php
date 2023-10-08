<?php

for ($i = 1; $i <= 100; $i++) {
    if (($i % 3) == 0)
        echo 'Simples <hr>';
    else if (($i % 5) == 0)
        echo 'Teste <hr>';
    else
        echo $i.' <hr>';
}

