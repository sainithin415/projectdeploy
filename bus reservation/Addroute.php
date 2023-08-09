<?php 
session_start();

  include("connection.php");
  if(isset($_POST['routeAdd'])){

    $via_city=$_POST['via_city'];
    $destination=$_POST['destination'];
    $bus_name=$_POST['bus_name'];
    $dep_date=$_POST['departure_date'];
    $dep_time=$_POST['departure_time'];
    $cost=$_POST['cost'];
   

   


      if($conn->connect_error)
         {
           die('Connection Failed :'.$conn->connect_error);
         }
         else
         {

             $stmt=$conn->prepare("INSERT INTO route(via_city,destination,bus_name,departure_date,departure_time,cost) VALUES(?,?,?,?,?,?)");

             $stmt->bind_param("sssssi",$via_city,$destination,$bus_name,$dep_date, $dep_time,$cost);

             $stmt->execute();
             
              echo '<script type="text/javascript">alert("Route add successfully")</script>';
              


             
             $stmt->close();
             $conn->close();
             }
               
         
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
  input[type="submit"] {
    padding: 15px;
    width: 100%;
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
  </style>
</head>
<body>
    <div class="nav">
            <ul>
            <li><a  href="./home.php"><h3>EV BUS RESERVATIONS</h3></a></li>
          <li><a href="./about.php">About</a></li>
          <li><a href="./contact.php">Contact Us</a></li>
            <div class="dropdown">
                <button class="dropbtn">ADMIN
                </button>
                <div class="dropdown-content" id="myDropdown">
                <a href="./admin_menu.php">Routes</a>
                <a href="./BookingManage.php">Bookings</a>
                <a href="./logout.php">Logout</a>
                </div>
            </div>
            </ul>
        </div>
  <header>
    <div class="div-main">
      <h1>Adding Route</h1>
      <form action="#" method="POST">
      <div class="form_wrap">
        <div class="input_wrap">
          <label for="title">From</label>
          <input type="text" id="title" name="via_city" placeholder="From" required>
        </div>
        <div class="input_wrap">
          <label for="title">Destination</label>
          <input type="text" id="title" name="destination" placeholder="Destination" required>
        </div>
        <div class="input_wrap">
          <label for="title">Bus Name</label>
          <input type="text" id="title" name="bus_name" placeholder="Bus Name"  required>
        </div>

        <div class="input_wrap">
          <label for="title">Departure Date</label>
          <input type="date" id="title" name="departure_date" placeholder="Date of Departure" class="idclass" required>
        </div>

        <div class="input_wrap">
          <label for="title">Departure Time</label>
          <input type="Time" id="title" name="departure_time" placeholder="Time of Departure" class="idclass" required>
        </div>

        <div class="input_wrap">
          <label for="title">Cost</label>
          <input type="text" id="title" name="cost" placeholder="Cost" class="idclass" required>
        </div>
        
        
        <div class="input_wrap">
          <input type="submit" value="Add Route" class="submit_btn" name="routeAdd">

        </div>



      </div>
    </form>
    </div>
  </header>

</body>
</html>


