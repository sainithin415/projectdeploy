<?php 
session_start();

  include("connection.php");
  $user_data = check_login($conn);
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bus Reservation</title>
  <link rel="stylesheet" href="./css/styles.css">
  <style>
    .nav{
    overflow: hidden;
    height: 25px;
  }
  
  .nav ul{
    list-style: none;
    display: flex;
    justify-content: space-evenly;
  }
  a {
    color: #fff;
    text-decoration: none;
    font-weight: 700;
    text-transform: uppercase;
  }
  
  .nav ul li a:hover {
    color: #f8c700;
  }
  img{
    height:25px;
  }

  </style>
</head>
<body>
    <div class="nav">
        <ul>
          <li><a  href="./home.php"><h3>EV BUS RESERVATIONS</h3></a></li>
          <li><a href="./about.php">About</a></li>
          <li><a href="./contact.php">Contact Us</a></li>
          <div class="dropdown">
            <button class="dropbtn">USER
            </button>
            <div class="dropdown-content" id="myDropdown">
              <a href="./profile.php">Profile</a>
              <a href="./user_booking.php">Your Booking</a>
              <a href="./user_menu.php">Book Tickets</a>
              <a href="./logout.php">Logout</a>
            </div>
          </div>
        </ul>
    </div>
  <header>
    <div class="div-main">
      <h1>Account Information</h1>
        <p>User name:- <?php echo $user_data['username'];?>   </p><br>
        <p>Email:- <?php echo $user_data['email'];?> </p>
        <br>
        <p>First name:-<?php echo $user_data['First_Name'];?></p><br>
        <p>Last name:-<?php echo $user_data['Last_Name'];?></p><br>
                
  </div>
  </header>
</body>
</html>
