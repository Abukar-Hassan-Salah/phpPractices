<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
    /*Write PHP program that converts decimal positive integer number into binary, octal, and
    hexadecimal number (do not use built-in functions such as decbin, decoct, dechex).*/
    echo 'this is PHP program that converts decimal positive integer number into binary, octal, and
    hexadecimal number';
function decToBinary($decimal)
    {
        $binary = "";
        while ($decimal > 0) {
            $remainder = $decimal % 2;
            $binary = $remainder . $binary;
            $decimal = intval($decimal / 2);
        }
        return $binary;
    }

function decToOctal($decimal)
    {
        $octal = "";
        while ($decimal > 0) {
            $remainder = $decimal % 8;
            $octal = $remainder . $octal;
            $decimal = intval($decimal / 8);
        }
        return $octal;
    }

function decToHexadecimal($decimal)
    {
        $hexadecimal = "";
        while ($decimal > 0) {
            $remainder = $decimal % 16;
            if ($remainder < 10) {
                $hexadecimal = $remainder . $hexadecimal;
            } else {
                $hexadecimal = chr($remainder + 55) . $hexadecimal;
            }
            $decimal = intval($decimal / 16);
        }
        return $hexadecimal;
    }

    $decimalNumber = 18;

    $binaryNumber = decToBinary($decimalNumber);
    $octalNumber = decToOctal($decimalNumber);
    $hexadecimalNumber = decToHexadecimal($decimalNumber);

    echo "<br>Decimal: " . $decimalNumber ;
    echo "<br>Binary: " . $binaryNumber ;
    echo "<br>Octal: " . $octalNumber ;
    echo "<br>Hexadecimal: " . $hexadecimalNumber ;

    echo '<br>..................................................................................................................................................................................
    <br>this Write PHP code that:<br>
                1)declares an array of one dimension, 
                initialize it to the following values:
                (5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9)
                2) <br>Print all elements of the array
                3) <br>Calculate and print total of all elements
                4) <br>Calculate and print total of even elements
                5) <br>Calculate and print total of odd elements
                6) <br>Find minimum element and its positions and
                7) <br>Find maximum element and its positions <br>';
// Step 1: Declare and initialize the array
$array = array(5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9);

// Step 2: Print all elements of the array
echo "Array Elements: ";
foreach ($array as $element) {
    echo $element . " ";
}
echo "<br>";

// Step 3: Calculate and print the total of all elements
$total = 0;
foreach ($array as $element) {
    $total += $element;
}
echo "<br>Total of all elements: " . $total ;

// Step 4: Calculate and print the total of even elements
$evenTotal = 0;
foreach ($array as $element) {
    if ($element % 2 == 0) {
        $evenTotal += $element;
    }
}
echo "<br>Total of even elements: " . $evenTotal ;

// Step 5: Calculate and print the total of odd elements
$oddTotal = 0;
foreach ($array as $element) {
    if ($element % 2 != 0) {
        $oddTotal += $element;
    }
}
echo "<br>Total of odd elements: " . $oddTotal .

// Step 6: Find the minimum element and its positions
$min = min($array);
$minPositions = array_keys($array, $min);
echo "<br>Minimum element: " . $min ;
echo "<br>Positions of minimum element: " . implode(", ", $minPositions) ;

// Step 7: Find the maximum element and its positions
$max = max($array);
$maxPositions = array_keys($array, $max);
echo "<br>Maximum element: " . $max . "\n";
echo "<br>Positions of maximum element: " . implode(", ", $maxPositions);

echo 'this is PHP program that converts decimal positive integer number into binary, octal, and
    hexadecimal number';

    // Step 1: Declare the associative array
// Step 1: Declare the associative array
$array = array(
    'Light' => array(
        'Red' => 'Light Red',
        'Green' => 'Light Green',
        'Blue' => 'Light Blue'
    ),
    'Normal' => array(
        'Red' => 'Normal Red',
        'Green' => 'Normal Green',
        'Blue' => 'Normal Blue'
    ),
    'Dark' => array(
        'Red' => 'Dark Red',
        'Green' => 'Dark Green',
        'Blue' => 'Dark Blue'
    )
);
?>

<style>
    table {
        border-collapse: collapse;
    }

    th, td {
        border: 1px solid black;
        padding: 20px;
        text-align: center;
    }

    th {
        background-color: lightgray;
    }
</style>

<table>
    <tr>
        <th></th>
        <th>Red</th>
        <th>Green</th>
        <th>Blue</th>
    </tr>
    <?php foreach ($array as $rowIndex => $row): ?>
        <tr>
            <th><?php echo $rowIndex; ?></th>
            <?php foreach ($row as $colIndex => $value): ?>
                <td><?php echo $value; ?></td>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
</table>
   


</body>
</html>