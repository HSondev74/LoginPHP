<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     
<?php 
// $x =1;
//      while($x <= 6) {
//           echo "<h$x>day la the h$x</h$x> ";
//           $x++;
//           // echo $x;
//      }

// $a = array("1","2","3","4","5","6","7","8","9");
// foreach ($a as $value) {
//      if ($value % 2 == 0) {
//           echo "$value <br>";
//      }
// }
for ($i = -4; $i <= 4; $i++) {
     if ($i == 0) {
         echo "0";
     } else {
         echo abs($i);
     }
     echo "<br>";
 }
 
?>

</body>
</html>