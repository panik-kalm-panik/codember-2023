string_read = ""
words_array = []
result_string = ""

with open("message_01.txt") as message:
    string_read = (message.read())

words_array = string_read.split()
words_count = dict((i, words_array.count(i)) for i in words_array)
for word, count in words_count.items():
    result_string += (word + str(count))

print (result_string)