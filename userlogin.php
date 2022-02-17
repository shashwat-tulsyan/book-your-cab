<?php
session_start();
if(!isset($_SESSION['username']))
{
  //header('location:userlogin.php');
}
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
  background: url(img/wu.jpg);
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
    <title>userlogin</title>
  </head>
  <body onload="alertfun()">
    <script type="text/javascript">
      function alertfun()
      {
        
      }
    </script>

    <div class="container bg-light mt-5 m-auto col-lg-4 h-70">
    	<h2 class=" text-center pt-4">Welcome User</h2>
      <button class="but btn-success btn-sm "><a href="cab.php">Home</a></button>
    	<div class="p-0">
    		<div class="m-auto p-0 text-center card-title">
    			<img src="images/userlogo.png" alt="admin ka photo" height="50" width="50">
    			
    		</div>
        <div>
        </div>
    		<div class="card-body mb-4">
    			<form  action="" method="POST">
    				<div class="input-group">
    				<span class="input-group-text">
    				 UserEmail
    				</span>
    		    <input type="email" name="email" class="form-control p-3 " placeholder="userEmail" required/>
    				
    				</div>
    				<div class="input-group mt-3">
    				<span class="input-group-text">
    				 PassWord
    				</span>
    		       <input type="PassWord" name="password" class="form-control p-3 " placeholder="" required/>
    				
    				</div>
    				<button class="btn btn-lg btn-success mt-3 mb-3" name="submit">Login</button>
          <p class="mt-5 text-lg-center">Dont have Account &#160 ?<a href="register.php"> CREAT ACCOUNT HERE</a> &#160here</p>
          <p class="mt-5 text-lg-center">Forget your password &#160 <a href="">Click &#160 </a>here</p>

    			</form>
    		</div>
    		
    	</div>
    </div>

    <?php
  
 include "connection.php";

if(isset($_POST['submit']))
    {

      $Emailid = $_POST['email'];
      $password = $_POST['password'];
   
      $sqlget= "select * from register where email = '$Emailid' and status='active'";
      $query1 = mysqli_query($con , $sqlget);

      $email_count = mysqli_num_rows($query1);
   
      

      if($email_count)

      {
        $email_pass = mysqli_fetch_assoc($query1);
        $dbpass = $email_pass['pass'];
        $_SESSION['username']=$email_pass['name'];
        $pass_decode = password_verify($password,$dbpass);
               if($pass_decode)
                {
                    ?>
                    <script type="text/javascript">
                    alert('login successful..');
                    </script>
                    <?php
                    header('location:userpage.php');
                  
                }
                else
                {
                  ?>
                  <script type="text/javascript">alert('wrong password');</script>
                  <?php
                }

        
      }
      else
      {
        
        ?>
        <script type="text/javascript">alert('Please activate your account first');</script>
        <?php
        
      }

   } 
  ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
</html>