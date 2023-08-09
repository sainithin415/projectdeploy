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
        h2{
            color: rgb(107, 106, 106);
        }
        .form-body{
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        input{
            padding: 6px;
            width: 95%;
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
            width: 100%;
            margin-top:10px; 
            border-radius: 7px;
            padding: 10px;
            background-color: rgb(136, 197, 30);
            
            color: white;
            font-size: larger;
            font-weight: bolder;
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

    </style>
</head>
<body>
    <form class="credit-card" method="post">
      <div class="form-header">
        <h2 class="title">Enter Your UPI No</h2>
        
      </div>
      <hr>
      <div class="form-body">
        <input type="text" class="card-number" placeholder="UPI Number" maxlength="10"  min="100000000" max="9999999999" step="1" pattern="[0-9]{10}" required>
     
        
        </div>
    <div>
        <button type="submit" name ="p"class="proceed-btn" >Proceed</button>
        <button type="submit" name ="u"class="paypal-btn" >Go Back</button>
      </div>
    </form>
    </body>
    </html>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if(isset($_POST['p'])){
        echo ("<script LANGUAGE='JavaScript'>
    window.location.href='paysuccess.php';
    </script>");

      }
      if(isset($_POST['u'])){
        echo ("<script LANGUAGE='JavaScript'>
    window.location.href='payment.php';
    </script>");

      }
    }
    ?>