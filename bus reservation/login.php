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
  <style>
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  font-family: 'Open Sans', sans-serif;
  font-size: 16px;
  line-height: 1.5;
  background-color: #333;
  color: #ede3e3;

}

header {
  padding:35px 35px 10%;
  background-image: url(https://coachwest.com/wp-content/uploads/2019/04/White-coach-bus-driving-at-night-min-scaled-2560x1280.jpg);
  background-repeat: no-repeat;
  background-size: 100%;
}

.div-main{
  border-radius: 10px;
  background-color: rgba(0, 0, 0, 0.61);
  backdrop-filter: blur(5px);
  display: flex;
  flex-direction: column;
  align-items: center;
}

nav ul{
  height: 25px;
  list-style: none;
  display: flex;
  justify-content: space-evenly;
}


nav ul li a {
  color: #fff;
  text-decoration: none;
  font-weight: 700;
  text-transform: uppercase;
}

nav ul li a:hover {
  color: #f8c700;
}

h1 {
  font-size: 60px;
  margin: 30px;
  text-align: center;
}

button{
  padding: 15px;
  margin-bottom: 30px;
  width: 150px;
  background-color: #f8c700;
  color: #333;
  border: none;
  border-radius: 7px;
  font-size: 18px;
  font-weight: 700;
}

button:hover {
  background-color: #333;
  color: #fff;
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
          <li><a href="./login.php">Login</a></li>
        </ul>
      </nav>
    </div>
  <header>
    <div class="div-main">
      <h1>Login </h1>
      <button onclick="userlogin()">User Login</button>
      <button onclick="adminlogin()">Admin Login</button>
      
    </div>
  </header>

</body>
<script>
  function userlogin(){
    window.location.assign("./user_login.php")
  }
  function adminlogin(){
    window.location.assign("./admin_login.php")
  }

</script>
</html>
