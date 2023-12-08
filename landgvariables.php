<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>local and global variables</title>
</head>
<body>
<?php
$x = 5; // global scope

function myTest() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";

// local variabel
function tijaabo() {
    $x = 8; // local scope
    echo "<p>Variable x inside function is: $x</p>";
  }
  tijaabo();
  
  // using x outside the function will generate an error
  echo "<p>Variable x outside function is: $x</p>";
?>
</body>
</html>