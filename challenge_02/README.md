### The Challenge 📝
In the world of espionage, a coding language is used with symbols that perform simple mathematical operations. </br>
Your task is to create a mini compiler that interprets and executes programs written in this symbol language.

The operations of the language are as follows:

 - "#" Increases the numeric value by 1.
 - "@" Decreases the numeric value by 1.
 - "*" Multiplies the numeric value by itself.
 - "&" Prints the current numeric value.

The initial numeric value is 0 and the operations should be applied in the order in which they appear in the string of symbols. </br>
Develop a mini compiler that takes a text string and returns another text string with the result of executing the program.

### Input Examples: 📄
<table>
  <tr>
    <th>Input</th>
    <th>Output</th>
    <th>Explanation</th>
  </tr>
  <tr>
    <td>##*&</td>
    <td>4</td>
    <td>Increment (1), increment (2), multiply (4), print (4).</td>
  </tr>
  <tr>
    <td>&##&*&@&</td>
    <td>0243</td>
    <td>Print (0), increment (1), increment (2), print (2), multiply (4), print (4), decrement (3), print (3).</td>
  </tr>
</table>