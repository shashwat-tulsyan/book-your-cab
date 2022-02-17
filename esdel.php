
<?php
include"connection.php";
$id =$_GET['id'];
$deletequery = "delete from enquery where id ={$id} ";
$query=mysqli_query($con,$deletequery);
header('location:es.php');
?>