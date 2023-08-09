<?php 
  include("connection.php");
  if($_SERVER['REQUEST_METHOD'] == "POST"){
    $user_name = $_POST['uname'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $con_pass=$_POST['cpassword'];


    if(!empty($user_name) && !empty($password))
    {
       if($password==$con_pass){
        
            $query = "select * from users where username = '$user_name' ";
            $result = mysqli_query($conn, $query);
            if($result){
                if(mysqli_num_rows($result) == 0){
                $query = "insert into users (First_Name,Last_Name,username,email,password) values ('$fname','$lname','$user_name','$email','$password')";
                mysqli_query($conn,$query);
                echo ("<script>
                window.alert('Succesfully  Signed Up!!!');
                </script>");
                header("Location:user_login.php");
                }
                else{
                  echo ("<script>
                  window.alert('Username already exists');
                  </script>");
                }
        }
    }
    else{
         echo "Passwords doesn't match";
      }
    }
    else{
    
         echo "Please enter some valid information!";

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
    label{
      font-size: 25px;
      display: inline-block;
      width: 250px;
      text-align: right;
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
      <h1>Register form </h1>
      
      <form action="#" method="POST">
        <div>
        <label for="fname">First Name :</label>
        <input type="text" name="fname" placeholder="First name"required>
      </div>
      <div>
        <label for="lname">Last Name :</label>
        <input type="text" name="lname" placeholder="Last name" required>
      </div>
      <div>
        <label for="uname">Username</label>
        <input type="text" name="uname" placeholder="Username" required>
        </div>
      <div>
        <label for="email">Email :</label>
        <input type=" email" name="email" placeholder="Email address" required>
      </div>
      <div>
        <label for="password">Password :</label>
        <input type="password" name="password" placeholder="Password" required>
      </div>
      <div>
        <label for="cpassword">Confirm Password :</label>
        <input type="password" name="cpassword" placeholder="Confirm Password" required>
      </div>
        <input type="submit" value="Register">
        <h3>Already have an account? <a href="./user_login.php">Login now</a></h3>
      </form>
    </div>
  </header>

</body>
</html>
