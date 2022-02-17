<?php
session_start();
include"connection.php";
if(isset($_GET['token']))
{
  $token=$_GET['token'];
  $updatequery ="update register set status ='active' where token='$token' ";
  $query=mysqli_query($con,$updatequery);
    if($query)
      {
          if(isset($_SESSION['message']))
          {
              $_SESSION['message']="Account has been activated succesfully..";
              header('location:userlogin.php');
          }else
          {
            $_SESSION['message']="you are logged out";
              header('location:userlogin.php');
          }
      }
      else{ $_SESSION['message']="Account not activated..";
              header('location:register.php');
      }

}

?>