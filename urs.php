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
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
             <meta http-equiv="content-language" content="hi">
               <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
               <meta name="viewport" content="width=device=widht initial-scale=0.1" >
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Kalam&display=swap" rel="stylesheet">
            <!--ya icon la link ha-->
            <script src="https://kit.fontawesome.com/e678a5884a.js" crossorigin="anonymous"></script>
  
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
      .mypro
      {
        width:100%;
        margin:auto;
      }

    </style>
    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<title>userlogin details</title>
</head>
<body>

<div class="container text-center mt-4">
<h1>Manage your Userlogin Registration</h1>
<button class="btn-success p-1"><a href="adminpanel.php">AdminHome</a></button>
</div>


<div class="m-auto bg-primary">
<div class="mt-5">
    

<table class="table">
  <thead>
    <tr>
      <th scope="col" style="font-size">id</th>
      <th scope="col">Full Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Gender</th>
      <!--<th scope="col">Password</th>
      <th scope="col">Confirm Password</th>-->
      <th scope="col">token</th>
      <th scope="col">status</th>
      <th scope="row" colspan="2">Operation's</th>
      <th scope="col">confirm</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $selectquery="select * from register";
    $query = mysqli_query($con ,$selectquery);
    while($res=mysqli_fetch_array($query))
    {
    ?>
     <tr>
      <th scope="row"><?php echo $res['id'];?></th>
      <td><?php echo $res['name'];?></td>
      <td><?php echo $res['email'];?></td>
      <td><?php echo $res['phone'];?></td>
      <td><?php echo $res['gender'];?></td>
      <!--<td><?php echo $res['pass'];?></td>
      <td><?php echo $res['cpass'];?></td>-->
      <td><?php echo $res['token'];?></td>
      <td><?php echo $res['status'];?></td>

      <td><button class="btn-success btn-sm" ><a href="ursdel.php?id=<?php echo $res['id'];?>">Delete</a></button></td>
      <td><button class="btn-success btn-sm" ><a href="userupdate.php?id=<?php echo $res['id'];?>">Update</a></button></td>
      <td><input type="checkbox" name=""></td>
 </tr>
<?php
    }
    ?>
    
    </tbody>
</table>


  </div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>