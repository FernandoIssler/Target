def fibonacci_sequence(n):
    fib_sequence = [0, 1]
    while fib_sequence[-1] < n:
        fib_sequence.append(fib_sequence[-1] + fib_sequence[-2])
    return fib_sequence

def is_in_fibonacci(n):
    fib_sequence = fibonacci_sequence(n)
    if n in fib_sequence:
        return True
    else:
        return False

number = int(input("\nDigite um número para verificar se está na sequência de Fibonacci: "))

if is_in_fibonacci(number):
    print(f"\nO número {number} pertence à sequência de Fibonacci.")
else:
    print(f"\nO número {number} não pertence à sequência de Fibonacci.")

print(f"\nEssa é a sequência de Fibonacci até o número digitado:")
print(fibonacci_sequence(number))