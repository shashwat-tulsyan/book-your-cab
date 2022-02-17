<?php session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="admin.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
          	<meta name="viewport" content="width=device=widht initial-scale=0.1" >
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Kalam&display=swap" rel="stylesheet">
            <!--ya icon la link ha-->
            <script src="https://kit.fontawesome.com/e678a5884a.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<style type="text/css">
  *
{
  margin:0;
  padding:0;
  box-sizing:border-box;
}
 html
                   {
                    font-size:62.5%;
                    /* 100% =16px
                    1px=6.25%
                    10px=62.5% 
                     */
                   }
body
{
  background:url(images/bg.jpg);
  background-repeat:no-repeat;
  background-size:100% 100%;
  width:100%;
  height:100vh;
  opacity:1.0;
}
img
{
  color: #fff;
}
button a
{
  text-decoration: none;
  color: white;
}
button a:hover
{
  color: white;
}
.but
{
  margin-left:13px;
}

</style>
    <title>adminpage</title>
  </head>
  <body>

    <div class="container bg-light mt-5 m-auto col-lg-4 h-70">
    	<h2 class=" text-center pt-4">Welcome Admin</h2>
      <button class="but btn-success btn-sm "><a href="cab.php">Home</a></button>
    	<div class="p-0">
    		<div class="m-auto p-0 text-center card-title">
    			<img src="images/userlogo.png" alt="admin ka photo" height="50" width="50">
    			
    		</div>
    		<div class="card-body mb-4">
    			<form accept="" action="" method="POST" class="">
    				<div class="input-group">
    				<span class="input-group-text">
    				 Userld
    				</span>
    		       <input type="text" name="userid" class="form-control p-3 " placeholder="username" required/>
    				
    				</div>
    				<div class="input-group mt-3">
    				<span class="input-group-text">
    				 PassWord
    				</span>
    		       <input type="PassWord" name="password" class="form-control p-3 " placeholder="" required/>
    				
    				</div>
    				<button class="btn btn-lg btn-success mt-3 mb-3" name="submit">Login</button>
    			</form>
    		</div>
    		
    	</div>
    </div>

    <?php
  
 include"connection.php";
if(isset($_POST['submit']))
     {

        $username =$_POST['userid'];
        $password =$_POST['password'];
   
        $sqlget="select * from admin where user ='$username' && password ='$password'";
        $query1 = mysqli_query($con,$sqlget);

        $rowcheck = mysqli_num_rows($query1);

        if($rowcheck === 1)
        {
          $_SESSION['userid']=$username;
          header('location:adminpanel.php');
          ?>

          <script type="text/javascript">
            alert('Welcome back Admin');
          </script>

        <?php
        }
        else
        {
          ?>
          <script type="text/javascript">
            alert('Wrong information entered.. ');
          </script>
          <?php
          header('location:admin.php');
        }

           } 
     ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    

     
</body>
</html>