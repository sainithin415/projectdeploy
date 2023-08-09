<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "bus_reservation";

if(!$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
	die("failed to connect!");
}
function check_login($conn){
	if(isset($_SESSION['user_id']))
    {

      $id = $_SESSION['user_id'];
      $query = "select * from users where id = '$id' limit 1";
      $result = mysqli_query($conn,$query);
      if($result && mysqli_num_rows($result) > 0)
        {
          $user_data = mysqli_fetch_array($result,MYSQLI_ASSOC);
          return $user_data;
        }
    }
    header("Location: Login.php");
  }
?>