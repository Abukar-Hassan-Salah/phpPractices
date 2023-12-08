<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>functionassignment.php</title>
</head>
<body>
<?php
  /*1) Write PHP program that calculates lowest common multiplier (LCM) of two 
    // positive integer numbers using a function (use 12 and 18 as default argument 
    values).*/
function calculateLCM($num1 = 12, $num2 = 18)
{
    $max = max($num1, $num2);
    $lcm = $max;

    while (true) {
        if ($lcm % $num1 == 0 && $lcm % $num2 == 0) {
            break;
        }
        $lcm += $max;
    }

    return $lcm;
}
// Calculate LCM using default argument values (12 and 18)
$result = calculateLCM();
echo "LCM: " . $result . "\n";

// Calculate LCM for custom numbers (e.g., 8 and 15)
$customResult = calculateLCM(8, 15);
echo "Custom LCM: " . $customResult . "\n";

/*
2) Write PHP program that calculates highest common factor (HCF) of two integer 
numbers (if any) using a function (use 18 and 24 as default argument values). 
The function should return the HCF of the two numbers. 
*/

function calculateHCF($num1 = 18, $num2 = 24)
{
    $minVal = min($num1, $num2);
    for ($i = 1; $i <= $minVal; ++$i) {
        if ($num1 % $i == 0 && $num2 % $i == 0) {
            echo "<br>";
            echo "$i is an HCF\n";
            return $i;
            }
            }
            echo "No HCF found\n";
            return null;
            }
            // xisaabinta HCF iyadoo oo ladeegsanaayo default argument values (18 and 24)  
            $hcfResult = calculateHCF();
           
            echo "<br>Default HCF Result: " . $hcfResult . "";
            // Calculate HCF for custom numbers (e.g., 36 and 72)   
            $customHcfResult = calculateHCF(36, 72);
            
            echo "<br>Custom HCF Result: " . $customHcfResult . "";

/*
3) Write PHP program that declares a function that takes two arguments, initial value 
and final value of positive integer numbers, then prints non-prime numbers of that 
range numbers. Take 2 and 100 as default initial and final values respectively.
*/

function printNonPrimeNumbers($initial = 2, $final = 100)
{
    // ku dhex socoshada   range ga  numberska
    for ($num = $initial; $num <= $final; $num++) {
        $isPrime = true;

        // hubinta hadii(if)  numberka   prime yahay
        for ($i = 2; $i < $num; $i++) {
            if ($num % $i == 0) {
                $isPrime = false;
                break;
            }
        }
        // soo daawacida non-prime numbers
        if (!$isPrime) {
            echo $num . " ";
        }
    }
}
echo "<br>";
// u yeerida  function isaga oo la jiro default argument valueska
printNonPrimeNumbers();
         
/*
4) Write PHP code that declares a function that converts decimal positive integer 
number into any radix (base number system) using a function. The function takes 
two arguments, the decimal number and the radix (base). Use default arguments 
values. 
*/
function decimalToRadix($decimalNumber, $radix = 2)
{
    if ($decimalNumber == 0) {
        return '0'; // Special case for 0
    }
    $result = '';
    while ($decimalNumber > 0) {
        $remainder = $decimalNumber % $radix;
        $result = $remainder . $result;
        $decimalNumber = intdiv($decimalNumber, $radix);
    }

    return $result;
}

// u bedelida decimal number to binary number (default base: 2)
$decimal = 123;
$binary = decimalToRadix($decimal);
echo "Binary: " . $binary . "";

/*
5) Write PHP code that declares a function that takes an array of one dimension as an 
argument. The function prints all array elements, calculates and prints total of odd 
elements, total of even elements, and total of all element
*/

function oddevenArray($arr)
{
    $oddTotal = 0;
    $evenTotal = 0;
    $allTotal = 0;

    echo "<br>Array elements: ";
    foreach ($arr as $element) {
        echo $element . " ";

        $allTotal += $element;
        if ($element % 2 == 0) {
            $evenTotal += $element;
        } else {
            $oddTotal += $element;
        }
    }

    echo "\n";
    echo "<br>Total of odd elements: " . $oddTotal . "";
    echo "<br>Total of even elements: " . $evenTotal . "";
    echo "<br>Total of all elements: " . $allTotal . "";
}

// tijaabin the functionka lala adeegsanayo tusaale array ah
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
oddevenArray($array);
?>
</body>
</html>