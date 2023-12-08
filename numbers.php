<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numbers in php</title>
</head>
<body>
    <?php
    # Php integer
    /*
    2256,-256,10358,-179567 all are integers
    An integer is a number without any decimal part.
    ......Here are some rules for integers:
        An integer must have at least one digit
An integer must NOT have a decimal point
An integer can be either positive or negative
Integers can be specified in three formats: 
    decimal (10-based), 
    hexadecimal (16-based - prefixed with 0x) 
    or octal (8-based - prefixed with 0)
    .......PHP has the following predefined constants for integers:
PHP_INT_MAX - The largest integer supported
PHP_INT_MIN - The smallest integer supported
PHP_INT_SIZE -  The size of an integer in bytes
.....php function that are used to check if the type of a variable is integer
        is_int()
        is_integer() - alias of is_int()
        is_long() - alias of is_int()
    */
    // Check if the type of a variable is integer:
$x = 5985;
echo "is this integer : ",var_dump(is_int($x));

$x = 59.85;
echo "<br>is this integer : " ,var_dump(is_int($x));
    ?>
</body>
</html>