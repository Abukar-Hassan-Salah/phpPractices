<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include Files in PHP</title>
</head>
<body>
    <h1>Include Files in PHP</h1>
    <?php
        include("comments.php");
        include_once ("ch4array.php");
        require ("Ch2.php");
        require_once ("Ch3.php");
        include_once ("ch5function.php");
        echo ("<hr width = '75%' color = 'brown'>");
        echo factrorial ();
        passingArray ($c);
        $d = returningArray ($c);
        echo ("<br>Returned array elements are:<br>");
        foreach ($d as $k => $v) 
            echo ("$v, ");
        staticvaribale ();
    ?>
</body>
</html>