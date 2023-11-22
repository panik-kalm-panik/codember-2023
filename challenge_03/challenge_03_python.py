lines_array = []
invalid_keys = []

with open("encryption_policies.txt") as policies:
    lines_array = (policies.readlines())

for line in lines_array:
    letters_count = {}

    line_parameters = line.split(":")[0]
    line_key = line.split(":")[1]

    for char in line_key:
        
        if char.isalpha():
            letters_count[char] = letters_count.get(char, 0) + 1

    line_parameters_range = line_parameters.split()[0]
    line_parameters_letter = line_parameters.split()[1]

    line_parameters_range_min = line_parameters_range.split("-")[0]
    line_parameters_range_max = line_parameters_range.split("-")[1]

    default_value = 0
    default_value = letters_count.setdefault(line_parameters_letter, 0)

    if (letters_count[line_parameters_letter] < int(line_parameters_range_min)):
        invalid_keys.append(line_key)
    elif (letters_count[line_parameters_letter] > int(line_parameters_range_max)):
         invalid_keys.append(line_key)

print(invalid_keys[41].replace(" ", ""))
