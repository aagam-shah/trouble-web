<?php

require 'Complain.php';

$con=mysqli_connect("localhost","root","12345","adminbs");
if (mysqli_connect_errno())
  {
  echo "errordb";
  }



$res = mysqli_query($con,"SELECT * from user where name='$_POST[email]'");


session_start();
session_destroy();


if(mysqli_num_rows($res)>0)
{
    session_start();
    $_SESSION['email'] = $_POST[email];
    echo "exist";
}
else
echo "error";
