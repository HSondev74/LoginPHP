 <?php

     include('../Test/connect.php');



     // var_dump($_POST);

     $username = $_POST['username'];
     $password = $_POST['password'];


     $sql = "select * from account where username= '$username' and password = '$password' ";

     // echo $sql;
     $result = $conn->query($sql);
     if ($result->num_rows == 1) {
          $row = $result->fetch_assoc();
          // echo "Welcome to $username";
          $_SESSION['username'] = $row['username'];
          echo "<script type='text/javascript'>location.href = 'admin.php'</script>";
     } else {
          echo "<script type='text/javascript'>alert('Login Failed');</script>";
          echo "<div  style='text-align: center;'><a href='a1.php' style='color: blue; cursor: pointer;'>Enter to login</a></div>";
     }
     $conn->close();
     ?>