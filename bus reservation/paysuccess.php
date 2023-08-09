<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <style>
        body{
            background-color: lightgray;
            display: flex;
            justify-content: center;
        }
        form{
            margin-top: 10%;
            width: 400px;
            background-color: rgb(255, 255, 255);
            padding: 20px;
        }
        img{
            height:30px;
        }
        h2{
            color: rgb(107, 106, 106);
        }
        .form-body{
            display: flex;
            flex-direction: column;
        }
        input{
            padding: 6px;
            width: 90%;
        }
        .date-field{
            display: flex;
            gap: 10px;
        }
        select{
            padding: 6px;
            height: 30px;
            width: 180px;
        }
        .card-verification{
            display: flex;
        }
        button{
            border: none;
            border-radius: 7px;
            padding: 10px;
            background-color: rgb(136, 197, 30);
            margin-bottom:10px;
        }
        a{
            text-decoration: none;
            color: white;
            font-size: larger;
            font-weight: bolder;
        }
        .paypal-btn{
            background-color: rgb(82, 130, 218);
        }
        .cvv-details{
            padding-left: 10px;
        }
        p{
            font-size:20px
        }
        h1{
            font-weight:1200;
        }
    </style>
</head>
<body>
    <div id="printableArea">
    <form class="credit-card">
      <div class="form-header">
        <h1>EV Bus Reservation</h1>
        <h2 class="title"><img src="https://th.bing.com/th/id/OIP.Q-O-LTdEm1GvYaIBCBatEQHaHa?w=212&h=212&c=7&r=0&o=5&dpr=1.3&pid=1.7">Booked Succesfully!!</h2>
        
      </div>
      <hr>
      <div class="form-body">
        <p>Booking id:    <?php echo $_SESSION['booking_id']; ?></p>
        <p>Passenger Name :    <?php echo $_SESSION['passenger_name']; ?></p>
        <p>Passenger No :    <?php echo $_SESSION['tel']; ?></p>
        <p>Boarding Place :    <?php echo $_SESSION['board_place']; ?></p>
        <p>Destination Place :    <?php echo $_SESSION['Your_destination']; ?></p>
        <button type="submit" class="proceed-btn" onclick="printDiv('printableArea')"><a>Download Ticket</a></button>
        <button type="submit" class="paypal-btn"><a href="user_menu.php">Go Home </a></button>
      </div>
    </form>
    <div>
    </body>
    <script>
        function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
    }
        </script>
</html>