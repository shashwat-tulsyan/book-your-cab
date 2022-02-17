<?php
include"connection.php";
session_start();
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
      *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
       body
      {
        background: url(img/back.jpg);
        background-size: 100% 100%;
        background-repeat: no-repeat;
      }
      button a
      {
        text-decoration: none;
        color: white;
      }
      button a:hover
      {
        color: black;
      }
    </style>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>cab booking section</title>
  </head>
  <body>
 
<div class="container text-center mt-4">
  <h1>Cab Booking Section</h1>
  <button class="btn-success p-1"><a href="adminpanel.php">AdminHome</a></button>
</div>


<div class="container  m-auto bg-primary">
  <div class="mt-5">
    

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">Email-id</th>
      <th scope="col">sd_no</th>
      <th scope="col">Number</th>
      <th scope="col">address</th>
      <th scope="col">Operation</th>
      <th scope="col">Reply</th>
      <th scope="col">confirm</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $selectquery="select * from cabbook";
    $query = mysqli_query($con ,$selectquery);
    while($res=mysqli_fetch_array($query))
    {
    ?>
     <tr>
      <th scope="row"><?php echo $res['id'];?></th>
      <td><?php echo $res['name'];?></td>
      <td><?php echo $res['email'];?></td>
      <td><?php echo $res['sdno'];?></td>
      <td><?php echo $res['number'];?></td>
      <td><?php echo $res['address'];?></td>
      <td><button class="btn-success btn-sm"><a href="bsdel.php?id=<?php echo $res['id'];?>">Delete</a></button></td>
      <td><button class="btn-success btn-sm"><a href="bsmail.php?id=<?php echo $res['id'];?>">Mail</a></button></td>
      <td><input type="checkbox" name=""></td>

    </tr>
<?php
    }
    ?>
    
    </tbody>
</table>


  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    
  </body>
</html>