<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 4 Arrays in PHP</title>

</head>
<body>
    <H1>Chapter 4 Arrays in PHP</H1>
    <?php
        $a = array ("Cabdiqaadir Maxamed Xasan", 22, "Hodan, Zone K", "0716798500", "JUST", false);
        // echo ("<pre>");
        // print_r ($a);
        // var_dump ($a);
        // echo ("</pre>");
        echo ("<br>Array elements are:<br>");
        for ($i = 0; $i < count($a); $i++) {
            if ($a[$i] == false)
                echo ("false, ");
            else
                echo ("$a[$i], ");
        }
        // manipulating array elements 
        $numbers = array (26, 11, 13, -4, 14, -17, 5 , 52, 7, -9,  21,  32, 2, 4, 5);
        echo ("<br>Array elements are:<br>");
        $total = 0;
        foreach ($numbers as $n) {
            // if ($n % 2 != 0)
            echo ("$n, ");
            $total += $n;
        }
        echo ("<br>Total of all elements = $total");
        // associative arrays 
        $assoc = array (
            'id' => "C120050",
            'name' => "Cabdiqaadir Maxamed Xasan",
            'age' => 21,
            'address' => "Zone K, Hodan, Mogadisho, Somalia",
            'sex' => "male"
        );
        /* echo ("<pre>");
        var_dump ($assoc);
        echo ("</pre>"); */
        echo ("<br>Associative array elements are:<br>");
        foreach ($assoc as $v)
            echo ("$v, ");
        // print associative array elements with indexes 
        echo ("<br>Associative array elements with key/values are:<br>");
        foreach ($assoc as $i => $v) //i = index, v = value
            echo ("[$i]: $v<br>");
        // 2-dimensional numerically indexed array 
        $ca201 = array (
            array ("C120593", "Farhan Muhidin Ahmed", 22, "068724209"),
            array ("C120050", "Abdiqadir Mohamed Hassan", 23, "07162987"),
            array ("C1200721", "Sabirin Yunis Hassan", 22, "06186529"),
        );
        // display array info in human understandable form 
        /* echo ("<pre>");
        var_dump ($ca201);
        echo ("</pre>"); */
        // print array elements 
        echo ("<table border = '1' width = '90%'><caption>2-dimensional array elements are:</caption>");
        foreach ($ca201 as $r) {
            echo ("<tr>");
            foreach ($r as $v)
                echo ("<td>$v");
            // echo ("<br>");
        }
        echo ("</table>");
        // print 2-dimensional array elements 
        echo ("<br>2-dimensional array elements with their indexes and values are:<br>");
        foreach ($ca201 as $i1 => $row) { //$i1=1st index
            foreach ($row as $i2 => $v) //$i2=2nd index
                echo ("[$i1,$i2]: $v, ");
                echo ("<br>");
        }

        // 2-dimensional associative arrays 
        $ca20 = array (
            'ca201' => array (
                'id' => "C120050",
                'name' => "Farhan Muhidin Ahmed",
                'semester' => 7,
                'address' => "Zone K, Hodan, Muqdisho",
            ),
            'ca202' => array (
                'id' => "C1200876",
                'name' => "Cabdiqadir Maxamed Hassan",
                'semester' => "7aad",
                'address' => "Taleex, Hodan, Muqdisho",
            ),
            'ca203' => array (
                'id' => "C1200764",
                'name' => "Sabirin Yunis Xasan",
                'semester' => "todobaad",
                'address' => "حي حمر جبب، مقديشو، الصومال",
            ),
        );
        echo ("<pre>");
        // var_dump ($ca20);
        echo ("</pre>");
        // print associative array elements 
        echo ("<br>2-dimensional associative array elements are:<br>");
        foreach ($ca20 as $i1 => $row) {
            foreach ($row as $i2 => $v)
                echo ("$v, ");
            echo ("<br>");
        }
        echo ("<br>2-dimensional associative array elements with their indexes and values are:<br>");
        foreach ($ca20 as $i1 => $row) {
            foreach ($row as $i2 => $v)
                echo ("[$i1,$i2]: $v, ");
            echo ("<br>");
        }
        // print 2-dimensional associative array element with their indexes in a table, do not repeat colomn names or row names 
        echo ("<table border ='1' width = '75%'><caption>2-dimensional associative arrays</caption>");
        foreach ($ca20 as $i1 => $row) {
            echo ("<tr style ='background-color: lightgray'><th>");
            foreach ($row as $i2 => $v)
                echo ("<th>$i2");
            break;
        }
        foreach ($ca20 as $i1 => $row) {
            echo ("<tr><th style ='background-color: lightgray'>$i1");
            foreach ($row as $i2 => $v)
                echo ("<td>$v");
            // break;
        }
        echo ("</table>");
        // in_array is used to search an element in the array 
        $b = 19;
        if (in_array ($b, $numbers)) 
            echo ("<br>$b is found");
        else
            echo ("<br>$b is not found");
        rsort ($numbers);
        arsort ($assoc);
        // echo ("<pre>");
        // var_dump($assoc);
        // echo ("</pre>");
        $str = "declares an associative array of two dimensions where row names are Light Normal and Dark column names are Red Green and Blue Array elements are shown in the below table";
        $str_array = explode (" ", $str);
        shuffle ($str_array);
        $new = array_merge ($numbers, $str_array, $a);  
        shuffle ($new);      
        echo ("<pre>");
        var_dump($new);
        echo ("</pre>");
    ?>
</body>
</html>