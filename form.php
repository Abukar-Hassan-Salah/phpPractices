<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling in PHP</title>
    <style>
        label, legend {font-weight: bold;}
        input,textarea,select {margin-bottom: 10px; margin-right: 10px;}
    </style>
</head>
<body>
    <h1>Registration Form</h1>
    <form action="Forms.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Online Form:</legend>
            <label for="">First name:</label>
            <input type="text" name="fname" id="" placeholder="magacaada">
            <label for="">Last name:</label>
            <input type="text" name="lname" id="" placeholder="magaca aabe">
            <br>
            <label for="">Sex:</label>
            <input type="radio" name="sex" id="" value="rag">Male
            <input type="radio" name="sex" id="" value="dumar">Female
            <br>
            <label for="">Faculties (you can choose more options):</label><br>
            <input type="checkbox" name="faculty[]" id="" value="faculty of computer" >Computer
            <input type="checkbox" name="faculty[]" id="" value="faculty of medicine">Daawaynta
            <input type="checkbox" name="faculty[]" id="" value="faculty of sharica and law">كلية الشريعة والقانون
            <input type="checkbox" name="faculty[]" id="" value="faculty of education">Waxbarashada
            <input type="checkbox" name="faculty[]" id="" value="faculty of management science">Maamulka iyo Maaraynta
            <input type="checkbox" name="faculty[]" id="" value="faculty of social science">Cilmiga Bulshada
            <input type="checkbox" name="faculty[]" id="" value="faculty of languages">Luqadaha
            <br>
            <label for="">Place of birth:</label>
            <select name="pob" id="">
                <option value="">Select a city</option>
                <option value="Muqdisho">Mogadishu</option>
                <option value="Hargeysa">Hargisa</option>
                <option value="Kismayo">Kismayo</option>
                <option value="Burca">Burco</option>
                <option value="Marka">Marka Caddey</option>
                <option value="Baydhaba">Baydhaba</option>
                <option value="Beledweyne">B/weyne</option>
                <option value="Galkacyo">Galkacyo</option>
                <option value="Jowhar">Jowhar</option>
            </select>
            <br>
            <label for="">Date of birth:</label>
            <input type="date" name="dob" id="" max="2008-12-31" min="1954-01-01">
            <br>
            <label for="">Recidency (you can choose more options):</label><br>
            <select name="recidency[]" size ="4" id="" multiple>
                <!-- <option value="">Select a city</option> -->
                <option value="Muqdisho">Mogadishu</option>
                <option value="Hargeysa">Hargisa</option>
                <option value="Kismayo">Kismayo</option>
                <option value="Burca">Burco</option>
                <option value="Marka">Marka Caddey</option>
                <option value="Baydhaba">Baydhaba</option>
                <option value="Beledweyne">B/weyne</option>
                <option value="Galkacyo">Galkacyo</option>
                <option value="Jowhar">Jowhar</option>
            </select>
            <br>
            <label for="">Attach your photo (only jpeg or png):</label>
            <input type="file" name="photo" id="" accept="image/jpeg, image/png">
            <br>
            <label for="">Attach your documents (only pdf):</label>
            <input type="file" name="docs[]" id="" multiple>
            <br>
            <label for="">Leave comment:</label><br>
            <textarea name="tarea" id="" cols="30" rows="10"></textarea>
            <br><br>
            <input type="reset" name="" id="" value="Clear data">
            <input type="submit" name="submit" id="" value="Send data">
        </fieldset>
    </form>
    <?php
        if (isset($_POST['submit'])) {
            if (!empty($_POST['fname']))
                echo ("<br>First name is: ". $_POST['fname']);
            if (!empty($_POST['lname']))
                echo ("<br>Last name is: ". $_REQUEST['lname']);
            if (!empty($_POST['sex']))
                echo ("<br>You sex is: ". $_POST['sex']);
            if (!empty($_POST['faculty'])) {
                echo ("<br>You have choosen ". count($_POST['faculty']). " faculty(ies):<br>");
                foreach ($_POST['faculty'] as $v)
                    echo ("$v, ");
            }
            // dropdown menu (combo box) code 
            if (!empty($_POST['pob']))
                echo ("<br>Place of birth is: ". $_POST['pob']);
            // date code 
            if (!empty($_POST['dob']))
                echo ("<br>Date of birth is: ". $_POST['dob']);
            // listbox code 
            if (!empty($_POST['recidency'])) {
                echo ("<br>Your recidency is:<br>");
                foreach ($_POST['recidency'] as $v)
                    echo ("$v, ");
            }
            // upload file code 
            if (!empty($_FILES['photo']['name'])) {
                // echo ("<pre>");
                // var_dump($_FILES['photo']);
                // echo ("</pre>");
                // limit extensions code 
                $myExtensions = array ("jpeg", "jpg", "png"); //allowed extensions
                $myExt = explode (".", $_FILES['photo']['name']);
                $ext = end($myExt);
                // echo ("<br>My extenstion is: $ext<br>");
                if (!in_array($ext, $myExtensions))
                    echo ("<br>Sorry! This extension  <b>$ext</b> of  <b><i>". $_FILES['photo']['name']. "</i></b> is not allowed. You can upload ONLY jpeg, jpg, or png.");
                // echo ("<pre>");
                // var_dump($myExt);
                // echo ("</pre>");
                //limit size file code
                elseif (!$_FILES['photo']['size'])
                    echo ("<br>Sorry! File <b> ". $_FILES['photo']['name']. "</b> is too big. You can upload files up to 3MB");
                elseif (file_exists("MyFiles/". $_FILES['photo']['name'])) {
                    $name = explode(".", $_FILES['photo']['name']);
                    $ext = end ($name);
                    $r = rand(1, 10000);
                    echo ("<br>Sorry!!! File: <b> ". $_FILES['photo']['name']. "</b> already exists. It will be renamed by <b>". $name[0]. "$r.$ext</b>");
                    if (move_uploaded_file($_FILES['photo']['tmp_name'], "MyFiles/". $name[0]. $r . ".$ext"))
                        echo ("<br>Now your photo has been uploaded successfully.");
                    else
                        echo ("<br>Sorry! Nothing uploaded");
                }
                elseif (move_uploaded_file ($_FILES['photo']['tmp_name'], "MyFiles/". $_FILES['photo']['name']))
                    echo ("<br>Your photo has been uploaded successfully.");
                else
                    echo ("<br>Nothing has been uploaded.");
                
            }
            // textarea code 
            if (!empty($_POST['tarea'])) 
                echo ("<br>Your valuable comment is:<br><pre>". $_POST['tarea']. "</pre>");

        }
    ?>
</body>
</html>