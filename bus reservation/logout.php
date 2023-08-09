<?php

session_start();
if(isset($_SESSION['user_id']))
{
	unset($_SESSION['user_id']);
}
if(isset($_SESSION['admin_id']))
{
	unset($_SESSION['admin_id']);
}
echo ("<script LANGUAGE='JavaScript'>
    window.alert('Logout success');
    window.location.href='login.php';
    </script>");
die;