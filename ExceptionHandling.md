# Exception Handling in PHP

An exception is an unexpected program result that can be handled by the program itself. Exception Handling in PHP is almost similar to exception handling in all programming languages. 

## PHP provides the following specialized keywords for this purpose.

**try**: It represents a block of code in which exceptions can arise.
**catch**: It represents a block of code that will be executed when a particular exception has been thrown.
**throw**: It is used to throw an exception. It is also used to list the exceptions that a function throws, but doesn’t handle itself.
**finally**: It is used in place of a catch block or after a catch block basically it is put for cleanup activity in PHP code.
**Why Exception Handling in PHP?** 

The following are the main advantages of exception handling over error handling

Separation of error handling code from normal code: In traditional error handling code there is always an if-else block to handle errors. These conditions and code to handle errors got mixed so that became unreadable. With try Catch block code becomes readable.
Grouping of error types: In PHP both basic types and objects can be thrown as exceptions. It can create a hierarchy of exception objects, group exceptions in namespaces or classes, and categorize them according to types.
Exception handling in PHP:

The following code explains the flow of normal try-catch block in PHP: 


```
<?php
​
// PHP Program to illustrate normal
// try catch block code
function demo($var) {
    echo " Before try block";
    try {
        echo "\n Inside try block";
            
        // If var is zero then only if will be executed
        if($var == 0)
        {
                
            // If var is zero then only exception is thrown
            throw new Exception('Number is zero.');
                
            // This line will never be executed
            echo "\n After throw (It will never be executed)";
        }
    }
        
    // Catch block will be executed only 
    // When Exception has been thrown by try block
    catch(Exception $e) {
            echo "\n Exception Caught", $e->getMessage();
        }
        
        // This line will be executed whether
        // Exception has been thrown or not 
        echo "\n After catch (will be always executed)";
}
​
// Exception will not be raised
demo(5);
​
// Exception will be raised here
demo(0);
?>
```