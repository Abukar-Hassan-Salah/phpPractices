<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ch5 Forms Assignment </title>
</head>
<body>
   <?php
/*Create a form (in html page) which allows the user to collect for student information, 
the form needs to contain these sections such as Personal Information, Parent 
Information, and Academic Information. 
 Personal Information needs to include at least Name, Place of Birth, Date of 
Birth, Address, Sex, Telephone, Email, and Profile Image. 
 Parent Information needs to include at least Name, Telephone, Relationship.  
 Academic Information needs to include at least ID, Faculty, Department, Class, 
and Registration Date. */
echo "<form action='' method='post' enctype='multipart/form
-data'>";
echo "<h2>Personal Information</h2>";
echo "<label>Name:</label><br>";
echo "<input type='text' name='name'><br>";
echo "<label>Place of Birth:</label><br>";
echo "<input type='text' name='place_of_birth'><br>";
echo "<label>Date of Birth:</label><br>";
echo "<input type='date' name='date_of_birth'><br>";
echo "<label>Address:</label><br>";
echo "<input type='text' name='address'><br>";
echo "<label>Sex:</label><br>";
echo "<input type='radio' name='sex' value='male'>Male<br
>";
echo "<input type='radio' name='sex' value='female'>Fem
ale<br>";
echo "<label>Telephone:</label><br>";
echo "<input type='text' name='telephone'><br>";
echo "<label>Email:</label><br>";
echo "<input type='email' name='email'><br>";
echo "<label>Profile Image:</label><br>";
echo "<input type='file' name='profile_image'><br>";
echo "<h2>Parent Information</h2>";
echo "<label>Name:</label><br>";
echo "<input type='text' name='parent_name'><br>";
echo "<label>Telephone:</label><br>";
echo "<input type='text' name='parent_telephone'><br>";
echo "<label>Relationship:</label><br>";
echo "<input type='text' name='relationship'><br>";
echo "<h2>Academic Information</h2>";
echo "<label>ID:</label><br>";
echo "<input type='text' name='id'><br>";
echo "<label>Faculty:</label><br>";
echo "<input type='text' name='faculty'><br>";
echo "<label>Department:</label><br>";
echo "<input type='text' name='department'><br>";
echo "<label>Class:</label><br>";
echo "<input type='text' name='class'><br>";
echo "<label>Registration Date:</label><br>";
echo "<input type='date' name='registration_date'><br>";
echo "<input type='submit' value='Submit'>";
echo "</form>";

    ?>
</body>
</html>