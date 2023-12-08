<!DOCTYPE html>
<html>
<head>
  <title>Submitted Student Information</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
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