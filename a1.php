<?php
include('../Test/connect.php');
$loginFalse = false;
if (isset($_POST['username']) || isset($_POST['password'])) {

     $username = $_POST['username'];
     $password = $_POST['password'];

     $sql = "select * from account where username = '$username' and password = '$password' ";

     $result = $conn->query($sql);
     if ($result->num_rows == 1) {
          $row = $result->fetch_assoc();
          $_SESSION['username'] = $row['username'];
          echo "<script type='text/javascript'>location.href= 'admin.php'</script>";
          exit;
     } else {
          $loginFalse = true;
     }

     $conn->close();
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>

<body>
     <?php
     if ($loginFalse == true) {
     ?>
          <h1>Email or Password not correct </h1>
     <?php
     } ?>

     <form action="a1.php" method="POST" style="display: flex; flex-direction: column; justify-content:center; width: 300px; margin: 0 auto;">
          <h1>Please sign in</h1>
          <div style="margin: 10px 0; width: 100%;">
               <input type="text" name="username" placeholder="email" style="padding: 10px 5px;  width: 100%;">
          </div>
          <div style="margin: 10px 0;  width: 100%;">
               <input type="text" name="password" placeholder="password" style="padding: 10px 5px;  width: 100%;">
          </div>
          <br>
          <button type="submit" style="padding: 10px 30px; background:blue; color: #fff;">Sign in</button>
     </form>

</body>

</html>