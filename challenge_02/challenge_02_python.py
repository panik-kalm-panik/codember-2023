string_read = ""
count_var = 0
result = ""

with open("message_02.txt") as message:
    string_read = (message.read())

for char in string_read:
    if (char == "#"): count_var += 1
    elif (char == "@"): count_var -= 1
    elif (char == "*"): count_var *= count_var
    elif (char == "&"): result += str(count_var)
    else: print("Error")

print(result)