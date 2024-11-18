<?php

if(is_int(5)) { // True
echo "É um inteiro <br>";
}

if(is_int('É um texto')) { // False
    echo "É um inteiro <br>";
    }

$n = 6;

if(is_int($n)) { // True
    echo "É um inteiro 2 <br>";
    }

?>