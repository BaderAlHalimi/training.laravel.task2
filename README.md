# training.laravel.task2
Laravel training, task #2, Gaza sky geeks training!!

****************************************************

Questions:

● Write a PHP function that accepts an array of integers and return a new array after removing odd
numbers.

● Write a PHP function that accepts an array of strings and return the longest string found in the
array, the function should have a 2nd argument that will hold the index of the item that have the
longest string in the input array.

● Write a function that accepts 2 arrays and return a new array that holds the value of
multiplying each item in the first array by the corresponding item in the second array.

● Write a function to calculate the factorial of a number (a non-negative integer). The function
accepts the number as an argument.

● Write a function to check whether a number is prime or not.

____________________________________________________________________________________________________

in q1 we need to make a functions that accept a parameter that is array of integer values and return a new array that array does not contain any odd number. to solve it we can use foreach to check if the current value is even or odd, if the value was even, we will add this value via this key to the another array (local array) and after check all values, I will return this array to user.

in q2 we need to get the longest String value in the array the user send. we can use foreach to get the values as serial, in the first I need to declare a variable and assign this variable to 0 value, and chech if the length of the current value in the array greater than the value of this variable, I will change the value of this variable to the new value length, then I need to store the index of this value, at the end I need to return this value to the user so I will use the index I store in the memory to get this value.

in q3 I need to multiple the current value of the first array loop by the index corresponds it value in the second array, and if the first array ended, I will check if the second array was contain any value do'nt checked, and return this values, but if the second array was ended and the first array not, I need to return the values of the first arrays that remaining, I do this by loop and by recusrion.

in q4 I need to make a function that calculate the factorization of the number by recursion way.

in q5 I need to make a function that return true if the parameter was a prime number, else it will return false. in the first I need to calculate the sqrt() on the number, and I neet to begin at 2 to the value I calculate, if I found any number the parameter can divide by it I will break mu loop and return false becuase its meen the number isn't prime!


____________________________________________________________________________________________________




Done By: Eng.Bader Al-Din Al-Halimi
