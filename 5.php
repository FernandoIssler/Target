<?php
$string = readline("Digite a sua string: ");

for ($i = strlen($string) - 1; $i >= 0; $i--) {
    $reverse .= $string[$i];
}

echo "String original: " . $string . "\n";
echo "String invertida: " . $reverse . "\n";
