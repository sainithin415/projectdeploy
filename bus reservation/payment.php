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
            
            color: white;
            font-size: larger;
            font-weight: bolder;
        }
        a{
            text-decoration: none;
            color: white;
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
        <h2 class="title">Credit Card Details</h2>
        
      </div>
      <hr>
      <div class="form-body">
        <input type="text" class="card-number" placeholder="Card Number" maxlength="12"  min="10000000000" max="999999999999" step="1" pattern="[0-9]{12}" required>
     
        <div class="date-field">
          <div class="month">
            <select name="Month" required>
              <option value="">Month</option>
              <option value="january">January</option>
              <option value="february">February</option>
              <option value="march">March</option>
              <option value="april">April</option>
              <option value="may">May</option>
              <option value="june">June</option>
              <option value="july">July</option>
              <option value="august">August</option>
              <option value="september">September</option>
              <option value="october">October</option>
              <option value="november">November</option>
              <option value="december">December</option>
            </select>
          </div>
          <div class="year">
            <select name="Year" required>
              <option value="">Year</option>
              <option value="2023">2023</option>
              <option value="2024">2024</option>
              <option value="2025">2025</option>
              <option value="2026">2026</option>
              <option value="2027">2027</option>
            </select>
          </div>
        </div>
        <div class="card-verification">
          <div class="cvv-input">
            <input type="text" placeholder="CVV" maxlength="4"  min="100" max="9999" step="1" pattern="[0-9]{3,4}" required>
            
          </div>
          <div class="cvv-details">
            3 or 4 digits usually found <br> on the signature strip
          </div>
        </div>
        <button type="submit" name ="p"class="proceed-btn" >Proceed</button>
        
        <button type="submit" name ="u"class="paypal-btn" ><a href="upipay.php">Pay with UPI </a></button>
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
    window.location.href='upipay.php';
    </script>");

      }
    }
    ?>