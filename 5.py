string = input("Digite a sua string:")

reverse = ""

for i in range(len(string) - 1, -1, -1):
    reverse += string[i]

print("String original: ", string)
print("String invertida: ", reverse)