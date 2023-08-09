<?php 
session_start();

  include("connection.php");

  $user_data = check_login($conn);
  if(isset($_POST['AddBooking'])){

     $passenger=$_POST['passenger_name'];
     $tel=$_POST['tel'];
     $email=$user_data['email'];
     $board_place=$_POST['board_place'];
     $desti=$_POST['Your_destination'];

       if($conn->connect_error)
          {
            die('Connection Failed :'.$conn->connect_error);
          }
          else
          {
              $stmt=$conn->prepare("INSERT INTO booking(passenger_name,telephone,email,boarding_place,Your_destination) VALUES(?,?,?,?,?)");
              $stmt->bind_param("sssss",$passenger,$tel,$email,$board_place,$desti);
              $stmt->execute();
              $sqlget="SELECT * FROM booking WHERE passenger_name='$passenger' AND email='$email' AND Your_destination='$desti' limit 1 " ;
              $sqldata=mysqli_query($conn,$sqlget) or die('error getting');
              $row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC);
                $_SESSION['booking_id']=$row['id'];
                $_SESSION['passenger_name']=$passenger;
                $_SESSION['tel']=$tel;
                $_SESSION['email']=$email;
                $_SESSION['board_place']=$board_place;
                $_SESSION['Your_destination']=$desti;
              $stmt->close();
              $conn->close();
              header("Location:payment.php");
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
      <h1>Passenger Details</h1>
    <form action="#" method="POST">
      <div class="form_wrap">
        <div class="input_wrap">
          <label for="title">Bus ID</label>
          <input type="text" id="title" name="bus_id" value=<?php echo $_GET['id']?> readonly>
        </div>
        <div class="input_wrap">
          <label for="title">Passenger Name</label>
          <input type="text" id="title" name="passenger_name" placeholder="Passenger Name" required>
        </div>
        <div class="input_wrap">
          <label for="title">Age</label>
          <input type="number" id="title" name="age" placeholder="Passenger Age" required>
        </div>
        <div class="input_wrap">
          <label for="title">Telephone</label>
          <input type="Tel" id="title" name="tel" placeholder="Telphone"  maxlength="10"pattern="[1-9]{1}[0-9]{9}" required>
        </div>

        <div class="input_wrap">
          <label for="title">Your Boarding Place</label>
          <input type="text" id="title" name="board_place" value=<?php echo $_GET['b']?> readonly>
        </div>

        <div class="input_wrap">
          <label for="title">Your destination</label>
          <input type="text" id="title" name="Your_destination" value=<?php echo $_GET['d']?> readonly>
        </div>


        <div class="input_wrap">
          <input type="submit" value="Book Now" class="submit_btn" name="AddBooking">

        </div>



      </div>
    </form>
    </div>
  </header>

</body>
</html>


