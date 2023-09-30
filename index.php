<?php

for ($i = 1; $i <= 100; $i++) {
    if (($i % 3) == 0)
        echo 'R2 <hr>';
    else if (($i % 5) == 0)
        echo 'Sis <hr>';
    else
        echo $i.' <hr>';
}

