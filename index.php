<?php

for($i = 0; $i <= 10; $i++) {
    for($contador = 1; $contador <= 10; $contador++) {
        $resultadoMultiplicacao = $contador * $i;

        echo "$contador X $i = $resultadoMultiplicacao" . PHP_EOL;
    }
}

?>