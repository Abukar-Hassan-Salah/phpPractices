<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Echo and print statements</title>
</head>
<body>
    <?php
    // the echo statement can be used with or without parentheses echo or echo ()
    echo "<h2> PHP is Easy and fun!</h2>";
    echo "Hello World<br>";
    echo "I'm about to learn Php<br>";
    echo "this ","String", "was" , "made" , "with multiple parameter";
    
    // displaying variables show how to output text and variales with echo statement
    $name = "Abukar";  
    $age =23; 
    $country="somalia";
    echo "<br> your name is : ",$name;
    echo "<br> your age is : ",$age;
    echo "<br> your country is : ",$country;

    // print statement can be used with or without parentheses print or print()
    print("<h2>Php is Fun! <br>");
    print "Welcome to Php lessons<br>";
    print "I'm About Learning Php"
    ?>
</body>
</html>