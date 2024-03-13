<?php

function fibonacci_sequence($n)
{
    $fib_sequence = [0, 1];
    while ($fib_sequence[count($fib_sequence) - 1] < $n) {
        $fib_sequence[] = $fib_sequence[count($fib_sequence) - 1] + $fib_sequence[count($fib_sequence) - 2];
    }
    return $fib_sequence;
}

function is_in_fibonacci($num)
{
    $fib_sequence = fibonacci_sequence($num);
    if (in_array($num, $fib_sequence)) {
        return true;
    } else {
        return false;
    }
}

$number = (int)readline("\nDigite um número para verificar se está na sequência de Fibonacci: ");
if (is_in_fibonacci($number)) {
    echo "\nO número $number pertence à sequência de Fibonacci.\n";
} else {
    echo "\nO número $number não pertence à sequência de Fibonacci.\n";
}

echo "\nEssa é a sequência de Fibonacci até o número digitado:\n";
print_r(fibonacci_sequence($number));
