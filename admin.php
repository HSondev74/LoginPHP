<?php

include('.//connect.php');

if (!isset($_SESSION['username'])) {
     echo "<script>location.href = 'a1.php'</script>";
     exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <title>Document</title>
</head>

<body>
     <section class="container-md">
          <header style="display: flex; justify-content: space-around;">
               <div>
                    Welcome <?php echo $_SESSION['username']  ?></a>
               </div>
               <div>
                    <a href="logout.php">Logout</a>
               </div>
          </header>
          <!-- main -->
          <main>
               <aside>

               </aside>
               <article>

               </article>
          </main>
          <footer>4</footer>
     </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>

</html>