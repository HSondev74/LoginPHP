<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     <?php
          echo "<h2>Hello world</h2>";
           $a = "Trong";

           echo $a;
            $A = 2 + 7 +9;
           $B = 5;
          echo $A + $B;
          
          
     ?>


          <br />
          
          <?php
          echo "<br/>";
           $txt = "world";
           echo "I love" . $txt . "!";

          
     ?>
          <br />
          
          <?php
           $txt1 = "Hi";
           echo "I love" . $txt1 .  "!";
               $a = 5;
               $b = 6;

               function myTest() {
                    global  $a, $b;
                     $a = $a + $b;
                    
               }
               myTest();
               echo "<br/>";
               print $a;
               echo "<br/>";
               $brand = [
                    "a" => "toyota",
                    
               ];
               print_r($brand["a"]);
               echo "<br/>";

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


                  echo "<br>";
                  
                  $bbb = "aaa";
                  if(isset($bbb)) {
                    echo $bbb . "<hr/>";
                  }

                  
          
     ?>

</body>
<script>
     
</script>
</html>