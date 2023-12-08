<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 5 Functions in PHP</title>
</head>
<body>
    <h1>Functions in PHP</h1>
    <?php
        // function definition 
        $a = 6;
        // factrorial ($a); //function call
        echo factrorial($a);
        function factrorial (&$x = 4) { //4 is the default argument
            $fact = 1;
            for ($i = 1; $i <= $x; $i++) 
                $fact *= $i;
            // echo ("<br>Factoraial of $x = $fact");
            // $x++;\
            // global $a;
            // echo ("<br>Value of a = $a");
            // $GLOBALS assoctiative array is used to access global variables inside the function 
            echo ("<br>Value of global vairable a = ". $GLOBALS['a']);
            return ("<br>Factoraial of $x = $fact");
            // echo ("<br>After return statement");
            //any statement after return is unreachable and will never run
        }
        echo ("<br>Value of a = $a"); //6 or 7
        echo factrorial (); //use default arguments (4)
        // factrorial(5);
        // $b = factrorial (5); //function call
        // echo $b;
        // passing an array to function 
        $c = array(1,2,3,4,5,6,7,);
        function passingArray ($a) {
            echo ("<br>Array elements are: <br>");
            foreach ($a as $v)
                echo ("$v, ");
            echo ("<br>Number of elements = ". sizeof($a));
        }
        passingArray ($c);
        function returningArray ($a) {
            for ($i = 0; $i < count($a); $i++)
                $a[$i] += 2; // $a[$i] = $a[$i] + 2;
            return $a;
        }
        $b = returningArray ($c);
        echo ("<br>Returned array elements are:<br>");
        foreach ($b as $v)
            echo ("$v, ");
        // static variables 
        // static varibales are local and static means they have local scope and global lifetime
        function staticvaribale () {
            static $i = 5; //takes once, the 1st call
            echo ("<br>Value of i = $i");
            $i++;
        }
        staticvaribale ();
        staticvaribale ();
        staticvaribale ();
        staticvaribale ();
        staticvaribale ();
        staticvaribale ();

    ?>
</body>
</html>