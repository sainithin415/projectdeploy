<?php 
session_start();

  include("connection.php");
  $user_data = check_login($conn);
  $_SESSION['user_data']=$user_data;
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
  table
{
    width:99%;
    border-collapse:collapse;
    margin:auto;
    text-align:center;
    margin-top:50px;
    border:5px solid #f8c700;
    background-color: rgb(255, 255, 255);
    color: #000;

}
table th
{   
    border:5px solid #f8c700;
    padding:10px 0px 10px 0px;
}
table tr td
{ 
    border:5px solid #f8c700;
    height: 58px;
    padding: 22px 0px 0px 0px;
    border-bottom: 2px solid rgb(187, 187, 187);
    font-size: 20px;
}
table tr td a
{
    color: white;
    border-radius: 5px;
    text-decoration: none;
    margin: 10px;
    font-weight: 700;
}

table tr td button:hover
{
    border: 2px solid yellow;
    border-radius: 7px;
    background-color: #333;
    color: white;
}
table tr td button 
{
  height:40px;
  border:2px solid yellow;
  border-radius:7px; 
  background-color:red;
  color:white;
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
      <h1>Welcome user</h1>
      <h2>Book your tickets below</h2>
      <form  method="POST">
        <div class="form-group">
          <label for="from">From:</label>
          <input type="text" id="from" name="from" placeholder="Enter city or airport" required>
        </div>
        <div class="form-group">
          <label for="to">To:</label>
          <input type="text" id="to" name="to" placeholder="Enter city or airport"  required>
        </div>
        <div class="form-group">
          <label for="depart">Departure Date:</label>
          <input type="date" id="depart" name="depart"  required>
        </div>
        <button type="submit">Search</button>
      </form>
      <h2>Available Buses</h2>
  <main>
        <?php

    if($_SERVER['REQUEST_METHOD'] == "POST"){

    $sqlget="SELECT * FROM route WHERE via_city LIKE'%{$_POST['from']}%' AND destination LIKE'%{$_POST['to']}%' AND departure_date='{$_POST['depart']}'";
    $sqldata=mysqli_query($conn,$sqlget) or die('error getting');
    

    echo "<table>";
    echo "<tr>
      <th>ID</th>
    <th>From</th>
    <th>To</th>
    <th>Bus Name</th>
    <th>Departure Date</th>
    <th>Departure Time</th>
    <th>Cost</th>
    <th>Booking</th>
    
   
       </tr>";

       while ($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
       {
        echo "<tr><td>";
        echo $row['id'];
        echo "</td><td>";
        echo $row['via_city'];
        echo "</td><td>";
        echo $row['destination'];
        echo "</td><td>";
        echo $row['bus_name'];
        echo "</td><td>";
        echo $row['departure_date'];
        echo "</td><td>";
        echo $row['departure_time'];
        echo "</td><td>";
        echo $row['cost'];
        echo "</td>";
       
          
        ?>

        <td>

        <button >
          <a href="Booking.php?id=<?php echo $row['id'];?>&b=<?php echo $row['via_city'];?>&d=<?php echo $row['destination'];?>">
          Book Now
          </a>
        </button>

        </td></tr>

<?php
       }

       echo "</table>";
      }


?>
  </main>
  </div>
  </header>
</body>
</html>
