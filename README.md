# Reverse Polish Notation

Reverse Polish notation (RPN) is a mathematical notation in which every operator follows all of its operands,
in contrast to Polish notation, which puts the operator in the prefix position.

For the given project, I have identified two key areas which can/may have variations;
* The methods by which we provide the data <- Lets call it +Notation+
* The algorithm, Reverse Polish Notation and Polish Notation <- Lets call it +Process+

So I decided to create interfaces for Notation and Process. Hence, we have list of classes under sub-folder
'Process' and 'Notation'

## Processes

Classes in Process defines methods that will deliver the data to the Notation Interface.
So far, I can think of two methods;
    * UserDefinedArray
    * RealTimeCLI

## Notations

Classes in Notation define the algorithm for Reverse Polish Notation and Polish Notation (for future scope)


##How to Run Tests

PHPUnit test is written for the following functions;
```
function process($process, $method);
```

Just a few tests are written due to time constraints. The test tests with the result matches with what is expected.


##How to Run RealTimeCLI

from the command, run 'php cli.php'
```
raaj@andal ~/reverse-polish-notation $php cli.php 
Entering into Real Time CLI Module
Enter an input value (q-quit)
3
Enter an input value (q-quit)
2
Enter an input value (q-quit)
1
Enter an input value (q-quit)
+
Enter an input value (q-quit)
*
Enter an input value (q-quit)
q
quitting CLI
Result: 9
...

