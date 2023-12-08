<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 2 Practice</title>
    <style>
       /* p {background-color: #00ff00;} */
    </style>
</head>
<body>
    <h1>Chapter 2 Practice</h1>
    <?php
        // Use echo or print to print something
        echo ("Use <strong>echo</strong> to print something on the browser.");
        print "<br>Print is the same as echo";
        #The difference between echo and print 
        echo "<br>You can use echo ", "with more parameters, ", "just seperate with comma"; 
        print "<br>You can use echo ". "with more parameters, ". "just seperate with comma<br>"; 
        // You can use print with more complex expression
        $a = 8;
        $b = 5;
        $c = $a + $b;
        // Ternary operator
        ($a < $b) ? print "$a is less than $b" : print "$a is greater than $b" ;
        // ($a < $b) ? echo "$a is less than $b" : echo "$a is greater than $b" ;
        // The difference between single and double quatations
        echo ("<br><p>Total of $a and $b = $c");
        // echo ('<br><p bgcolor = "skyblue">Total of $a and $b = $c</p>');
        /* Use forward slash with astrick at the begining of multline
        and astrick with forward slash at the end of multiline. */
        $b = 4.75;
        echo ("<br>The new value of b = $b");
        $b = "Welcome all CA20$a, that means you can add variable in the string";
        echo ("<br>Now, the value of b = $b");
        $echo = "It is not illigel to use keywords as variable name, but it is bad practice";
        echo ("<br>Value of echo = $echo");
        eChO ("<br>keywords are not case sensitive");
        // constants are same as variable except that they are not preceded dollar sign ($), and used with define function.
        define ("PI", 3.14);
        echo "<br>Value of PI = ", PI; 
        // operator percedence
        echo "<br>", (1 + 5) * 3; // 16 because multiplication has higher precedence over addition
        // operators with the same precedence are evaluated from left to right الحق لمن سبق
        echo ("<br>The result of 12 / 6 / 2 = ? ". 12 / (6 / 2));
        // Using heredocument (heredoc)
        $author = "Kulmie Xuseen Xasan";
        echo <<<HERE
            <p align = "left">
            Macalinkeena $author wuxuu yiri:<br>
            Debugging is <b>twice</b> as hard as writing the code in the first place.<br> $author.<br>
            Therefore, if you write the code as cleverly as possible, you are, by definition, not smart enough to debug it.
            </p>
        End of macalin $author text.
HERE;
    ?>
</body>
</html>