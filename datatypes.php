<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // variable can store data of different types, and different date types
    // can o different things 
    // Php sypports the following date types
    // string,integer,float,boolean,array,object,null and resource

    // string examples
    // String is sequence of characters like "Abukar".
    // String can be any text inside quoetes. you can use singe or double quoetes.
    $x = "Welcome To String Examples";
    $y = "We Are Learning Strings";
    echo $x;
    echo "<br>";
    echo $y;
    
    // Integer examples
     /* 
    An integer data type is non-decimal number between -2,147,483,648 and 2,147,483,648
    // Rules of integer
    must have a least one digit
    must not have decimal
    can be either positive or negative
    can be specified in decimal base(10),hexadecima base(16)
    octal base(8) or binary base(2)
    */

    $year = 2000;
    echo "<br>",var_dump($year);

    // Float examples
     /* 
     Float is real numbers with decimals
    */
    $deci = 10.20;
    echo "<br>",var_dump($deci);

    // boolean examples
    /* 
     Boolean represents two values: true (1) and false (0). 
     It's used to represent truth value.    
    */
    $israg = TRUE ;//true
    $isdumar = FALSE;//false
    echo "<br>",var_dump($israg,$isdumar);//output will be bool(TRUE)/bool(FALSE)
    

    // array examples
    /* 
     An Array is an ordered list of items. Each item has its own index which starts from zero.
     An array stores multiple values in single varialbe   
    */
    $cars = array("BMW","Toyota","Lanrofal","Landcarosal");
    // echo"<pre>",var_dump($cars);
    echo"<pre>",var_dump($cars);
    
    // object examples
    /* 
     An Object is a collection of variables that are treated as a unit.
     classes and objects are two main aspects of object oriened programming.
     a class is template of objects and objects is an instance of a class.
           
    */
    class Car {
        public $color;
        public $model;
        public function __construct($color, $model) {
          $this->color = $color;
          $this->model = $model;
        }
        public function message() {
          return "My car is a " . $this->color . " " . $this->model . "!";
        }
      }
      
      $myCar = new Car("black", "Volvo");
      echo $myCar -> message();
      echo "<br>";
      $myCar = new Car("red", "Toyota");
      echo $myCar -> message();
      $myCar = new Car("Blue","BMW");
      echo "<br>",$myCar ->message()

    
   
    ?>
</body>
</html>