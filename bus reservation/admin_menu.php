<?php 
session_start();

  include("connection.php");
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

.btn:hover,table tr td button:hover
{
    border: 2px solid yellow;
    border-radius: 7px;
    background-color: #333;
    color: white;
}
.btn,table tr td button 
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
      <h1>Bus Routes</h1>
    <?php
    $sqlget="SELECT * FROM route";
    $sqldata=mysqli_query($conn,$sqlget) or die('error getting');
    

    echo "<table>";
    echo "<tr>
      <th>ID</th>
    <th>Via City</th>
    <th>Destination</th>
    <th>Bus Name</th>
    <th>Departure Date</th>
    <th>Departure Time</th>
    <th>Cost</th>
    <th>Delete</th>
   
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
        <button  >
          <a href="deleteRoute.php?id=<?php echo $row['id'];?>">
            Delete
        </a>
       </button>

        </td>
    </tr>

<?php
       }
       echo "</table>";
?>
<br>
    <a href="Addroute.php"> <button class="btn" style="width:60px;margin-left: 30px;">Add Route</button></a>
  </div>
  </header>
</body>
</html>
