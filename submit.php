<!DOCTYPE html>
<html>
<head>
  <title>Submitted Student Information</title>
  <!-- */
  Use Bootstrap or Code snippets to style your form and table as much as possible. 
  */ -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <!-- /*2---When the Submit button is clicked, you need to validate the form has entries in each of 
the fields. If the form is missing an entry in the field, you need to tell the user what 
needs to be entered and put the user at that point on the form. 

3----Ensure that the name field is not empty and contains only letters and spaces, Validate 
the email field for a valid email format and also Check if a profile image uploaded and 
restrict the file type to image formats (e.g., .png, .jpg, .jpeg, .gif, etc.). 

4----Once the form is completed successfully, you need to redirect it to separate php page 
with the contents of the form and you need to display the information back to the user 
which is being submitted as tabular form.  -->
    */
  <div class="container">
    <h2>Submitted Student Information</h2>
    <table class="table">
      <tbody>
        <tr>
          <th>Field</th>
          <th>Value</th>
        </tr>
        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
          $fields = [
            "Name" => $_POST["name"],
            "Place of Birth" => $_POST["placeOfBirth"],
            "Date of Birth" => $_POST["dateOfBirth"],
            "Address" => $_POST["address"],
            "Sex" => $_POST["sex"],
            "Telephone" => $_POST["telephone"],
            "Email" => $_POST["email"],
            "Parent Name" => $_POST["parentName"],
            "Parent Telephone" => $_POST["parentTelephone"],
            "Relationship" => $_POST["relationship"],
            "Student ID" => $_POST["studentId"],
            "Faculty" => $_POST["faculty"],
            "Department" => $_POST["department"],
            "Class" => $_POST["class"],
            "Registration Date" => $_POST["registrationDate"],
          ];

          foreach ($fields as $field => $value) {
            echo "<tr><td>{$field}</td><td>{$value}</td></tr>";
          }
        }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>