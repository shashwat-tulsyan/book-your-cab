<?php
include"connection.php";
$id =$_GET['id'];
$deletequery = "delete from cabbook where id ={$id} ";
$query=mysqli_query($con,$deletequery);
header('location:bs.php');
?>