<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Functions</title>
</head>
<body>
    <?php
    // String fuctions examples
      /* 
      strlen() fuction returns the length of the string
    */
    echo strlen("Welcome to String Functions");

     /* 
      strword_count() fuction counts the number word in the string
    */
    echo "<br>",str_word_count("Abukar Hassan Salah");

     /* 
      strrev() fuction reverse the words in the  string
    */
    echo "<br>",strrev("Abukar");

     /* 
      strpos() function searches for a specific text within a string. 
      If a match is found, the function returns the character position of the first match. 
      If no match is found, it will return FALSE.
    */
    echo "<br>",strpos("Abukar Hassan salah","salah");//tell starting point of the string
    
    /* 
      strrep() function replaces some characters with some other characters in a string.
    */
    echo "<br>".str_replace('Abukar','Daud',"Abukar Sassan Salah");
    ?>
   
</body>
</html>