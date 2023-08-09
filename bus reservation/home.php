<?php
session_start();
if(isset($_SESSION['user_id'])){
  header("Location:user_menu.php");
}
if(isset($_SESSION['admin_id'])){
  header("Location:admin_menu.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bus Reservation</title>
  <link rel="stylesheet" href="./css/styles.css">
  <style>
    .div-main{
        height: 50vh;
    }
    .div-main a{
    color:#ff796d ;
    text-decoration: none;
}
  </style>
</head>
<body>
    <div class="container">
      <nav>
        <ul>
        <li><a  href="./home.php"><h3>EV BUS RESERVATIONS</h3></a></li>
          <li><a href="./about.php">About</a></li>
          <li><a href="./contact.php">Contact Us</a></li>
        
          <li><a href="./login.php" class="login">Login</a></li>
        </ul>
      </nav>
    </div>
  <header><div class="div-main">
      <h1>Bus Reservation</h1>
      <p>Book your next trip with ease.<br><br>
        New user?<strong><a href="./user_register.php">Register here</a></strong> to book tickets!!
    </p>
    </div>
  </header>
</body>
</html>
