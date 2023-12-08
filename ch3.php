<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 3 Practice</title>
</head>
<body>
    <h1>Chapter 3 Practice</h1>
    <?php
        // if statement single selection
        echo ("<br>This examples of sinhgle selection if..............................");
        $marks = 90;
        if ($marks >= 50) //if single selection
            echo ("<br>You have obtained $marks and it is a pass");
            
        // if...else double selection 
        echo ("<br>this examples of double selection if..else.............................");
        $marks = 50;
        if ($marks >= 50)
            echo ("<br>You have obtaid $marks and it is a pass");
        else
            echo ("<br>You have obtained $marks and it is NOT pass");
            echo ("<br>this examples of multiple selection if.elseif.if.elseif..elseif...........");
            // if...elseif...else multiple selection 
         $marks = 98;
        if ($marks >= 95)
            echo ("<br>You have obtained $marks and it is disticntion!!!");
        elseif ($marks >= 90)
            echo ("<br>You have obtained $marks and it is excellent");
        elseif ($marks >= 80)
            echo ("<br>You have obtained $marks and it is very good");
        elseif ($marks >= 70)
            echo ("<br>You have obtained $marks and it is good");
        elseif ($marks >= 60)
            echo ("<br>You have obtained $marks and it is not bad");
        elseif ($marks >= 50)
            echo ("<br>You have obtained $marks and it is hardly passed");
        else {
            echo ("<br>You have obtained $marks and it is not pass!!!");
            echo ("<br>You should register re-exam soon");
        }
        
        echo ("<br>this examples of switch statement.............................");
        $marks = -49;
        switch ($marks){
            case ($marks >100 || $marks < 0):
                echo ("<br>$marks is invalid marks");
                echo ("<br>Try again latter");
                break;
            case ($marks >= 95):
                echo ("<br>You have obtained $marks and it is distinction!!!");
                echo ("<br>Congratulations!!!");
                break;
            case ($marks >= 90):
                echo ("<br>You have obtained $marks and it is excellent");
                break;
            case ($marks >= 80):
                echo ("<br>You have obtained $marks and it is very good");
                break;
            case ($marks >= 70):
                echo ("<br>You have obtained $marks and it is good");
                break;
            case ($marks >= 60):
                echo ("<br>You have obtained $marks and it is not bad");
                break;
            case ($marks >= 50):
                echo ("<br>You have obtained $marks and it is hardly passed with faro cijji leh");
                break;
            default:
                echo ("<br>You have obtained $marks and it is NOT pass");
                echo ("<br>Register re-exam soon");
                break; //optional
        }

        // end-switch;
    ?>
</body>
</html>