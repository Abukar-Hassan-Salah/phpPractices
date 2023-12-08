<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Assignment</title>
</head>
<body>
    <?php
    /* 
      1)Write a program that compares three integer numbers then specifies and prints the greatest and
    the smallest one (do not use built-in function such as min or max)./*
    */
    // Prompt the user to enter three numbers to compare them
    echo "<br>Enter the 3 numbers to compare and to know the largest and smallest: ";
    $num1 = 90;
    $num2 = 20;
    $num3 = 45;
    // Initialize the greatest and smallest numbers
    $greatest = $num1;
    $smallest = $num1;
    // Compare the second number with the current greatest and smallest
    if ($num2 > $greatest) {
        $greatest = $num2;
    }
    if ($num2 < $smallest) {
        $smallest = $num2;
    }
    // Compare the third number with the current greatest and smallest
    if ($num3 > $greatest) {
        $greatest = $num3;
    }
    if ($num3 < $smallest) {
        $smallest = $num3;
    }
    // Print the greatest and smallest numbers
    
    echo "<br>The greatest number is: " , $greatest ;
    echo "<br>The smallest number is: "  ,$smallest ;

        /* 
        2)Write a program that prints whether the number is even (divisible by 2) or odd
        */
        
    $number = 3;
    // Check if the number is even or odd
    $isEven = ($number % 2 == 0);
    // Print the result
    if ($isEven) {
        echo "<<br>The number is even.";
    } else {
        echo "<br><br>The number is odd.","<br>";
    }

        /* 
        3)Write a program that prints numbers divisible by 5 from 1 to 50 using while statement.
        */
    // Initialize the counter variable
    $num = 1;
    echo "<br>numbers are divisible by 5:","<br>";
    // Iterate from 1 to 50
    while ($num <= 50) {
        // Check if the number is divisible by 5
        if ($num % 5 == 0) {
            
            echo "\r\n" ,$num." ,";    
        }
        // Increment the counter
        $num++;
    }

     /* 
      4)Write a program to find the reverse of a given number (for example, the reverse of 12345 = 54321,
    do not use any built-in function such as the strrev built-in function) using do…while statement.
    */
// Prompt the user to enter a 4-digit number
    echo "<br><br>Numbers Entered Are 54321:";
    $number = 54321;
    // Calculate the reverse of the numbers
    $reversedNumber = 0;
    do {
        $reversedNumber = ($reversedNumber * 10) + ($number % 10);
        $number = (int) ($number / 10);
    } while ($number > 0);
    // Print the reverse of the numbers
    echo "<br>The reverse is: $reversedNumber";


   /* 
      5)Write a program to find common factors of two positive integer numbers (for example, common
    factors of 42 and 70 are: 2, 7 and 14) using for statement.
    */
    // Prompt the user to enter two numbers
    $num1 = 42;
    $num2 = 70;
    // Find the minimum of the two numbers
    $minNumber = min($num1, $num2);
    // Initialize an array to store the common factors
    $commonFactors = [];
    // Find the common factors
    for ($k = 1; $k <= $minNumber; $k++) {
        if ($num1 % $k == 0 && $num2 % $k == 0) {
            $commonFactors[] = $k;
        }
    }
// implode is used for to concatenate all the elements of an array together in the same order as they are in the array
// Print the common factors
    echo "<br><br>Common factors of $num1 and $num2 are: " . implode(",", $commonFactors);
    /* 
      6)Write a program that calculates highest common factor (HCF) of two integer numbers (if any) (for
    example, HCF of 18 and 24 = 6) using do…while statement..
    */
    // Prompt the user to enter two numbers
    echo "<br> <br>Enter the 2 numbers to know their HCF: ";
    $num1 = 18;
    $num2 = 24;

    // Calculate the HCF using the Euclidean algorithm
    do {
        [$num1, $num2] = [$num2, $num1 % $num2];
    } while ($num2 !== 0);

    // Print the HCF
    echo "<br>The HCF of 18 and 24is: $num1";

     /* 
      7)Write a program that prints whether the number is a prime (whole number greater than 1 which is
        exactly divisible by itself and 1 but no other number) or non-prime using for statement...
    */

    // Prompt the user to enter a number
    echo "<br><br>Enter a number to know is it PrimeNumber: ";
    $num = 5;
    // Check if the number is prime
    $isPrime = true;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i === 0) {
            $isPrime = false;
            break;
        }
    }
    // Print the result
    if ($isPrime && $num > 1) {
        echo "<br>","$num is a prime number." ;
    } else {
        echo "<br>","$num is a non-prime number.";
    }

    /* 
      8)Write a program that prints non-prime numbers from 90 to 12 using while and for statement. ...
    */
// Print non-prime numbers from 90 to 12 using a while loop
    $num = 90;
    echo "<br><br>numbers is prime","<br>";
    while ($num >= 12) {
        $isPrime = true;
        for ($l = 2; $l <= sqrt($num); $l++) {
            if ($num % $l === 0) {
                $isPrime = false;
                break;
            }
        }
        if (!$isPrime && $num > 1) {
            echo "$num \n"," ,";
        }
        $num--;
}

    /* 
      9)Write a program that prints Fibonacci series, a series of numbers in which each number is the sum
        of the two preceding numbers. For example, 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, etc using while
        statement.....
    */
        // Prompt the user to enter the number of Fibonacci numbers to generate them
    echo "<br><br>the number of Fibonacci is 20:<br> ";
    $count =10;
    // Create and print the Fibonacci series
    $num1 = 0;
    $num2 = 1;
    echo "Fibonacci series are:<br> $num1, $num2";
    $k = 2;
    while ($k < $count) {
        $nextNum = $num1 + $num2;
        echo ", $nextNum";
        $num1 = $num2;
        $num2 = $nextNum;
        $i++;
    }
    ?>
</body>
</html>