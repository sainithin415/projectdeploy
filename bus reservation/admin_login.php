<?php
    session_start();
    include("connection.php");
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $user_name = $_POST['uname'];
        $password = $_POST['password'];
        if(!empty($user_name) && !empty($password))
        {
            $query = "select * from admin where username = '$user_name' and  password='$password' ";
            $result = mysqli_query($conn, $query);

            if($result)
            {
                if(mysqli_num_rows($result) > 0)
                {
                  $user_data = mysqli_fetch_assoc($result);
                  if($user_data['password'] === $password)
                    {
                      $_SESSION['admin_id'] = $user_data['id'];
                      header("Location:admin_menu.php");
                    }
                }
            }
            echo ("<script>
            window.alert('Wrong Username or Password');
            </script>");
        }else
        {
          echo ("<script>
          window.alert('Wrong Username or Password');
          </script>");
        }
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
input{
  padding: 15px;
  border: none;
  border-radius: 5px;
  margin-bottom: 15px;
  font-size: 18px;
  
}

body {
  font-family: 'Open Sans', sans-serif;
  font-size: 16px;
  line-height: 1.5;
  background-color: #333;
  color: #ede3e3;

}

header {
  padding:35px;
  background-image: url(https://coachwest.com/wp-content/uploads/2019/04/White-coach-bus-driving-at-night-min-scaled-2560x1280.jpg);
  background-repeat: no-repeat;
  background-size: 100%;
}

.div-main{
  border-radius: 10px;
  background-color: rgba(0, 0, 0, 0.61);
  backdrop-filter: blur(5px);
  text-align: center;
  
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

input[type="submit"]{
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

input[type="submit"]:hover {
  background-color: #333;
  color: #fff;
}
h3 a{
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
          <li><a href="./login.php">Login</a></li>
        </ul>
      </nav>
    </div>
  <header>
    <div class="div-main">
      <h1>Admin Login </h1>
      <form method="POST">
        <input type="text" name="uname" placeholder="Username">
        <br>
        <input type="password" name="password" placeholder="Password">
        <br>
        <input type="submit" value="Login">
      </form>
      
    </div>
  </header>

</body>
</html>
