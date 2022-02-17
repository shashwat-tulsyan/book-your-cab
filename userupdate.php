<?php 
session_start();
include"connection.php";
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
  /*background: url(images/register.jpg);*/
  background-repeat:no-repeat;
  background-size:100% 100%;
  width:100%;
  height: 100vh;
  opacity: 1.0;
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
    <title>User Update Page..</title>
  </head>
  <body>

<?php
$ids = $_GET['id'];
$showquery ="select * from register where id={$ids}";
$showdate = mysqli_query($con ,$showquery);
$value = mysqli_fetch_array($showdate);
?>
    <div class="container bg-light mt-5 m-auto col-lg-4 h-70">
    	<h2 class=" text-center pt-4">Welcome back admin</h2>
      <button class="but btn-success btn-sm "><a href="urs.php">Home</a></button>
    	<div class="p-0">
    		<div class="m-auto p-0 text-center card-title">
    			<img src="images/userlogo.png" alt="admin ka photo" height="50" width="50">
    			
    		</div>
    		<div class="card-body mb-4">
    			<form  action="" method="POST">
    				<div class="input-group">
    				<span class="input-group-text">
    				 FullName
    				</span>
    		       <input type="text" name="Name" class="form-control p-3 " placeholder="username" value="<?php echo $value['name'] ;?>" required/>
    				
    				</div>
    				<div class="input-group mt-3">
    				<span class="input-group-text">
    				 EmailId
    				</span>
    		       <input type="EmailId" name="Email" class="form-control p-3 " placeholder="" value="<?php echo $value['email'];?>" required/>
    				</div>

            <div class="input-group mt-3">
            <span class="input-group-text">
             PhoneNO
            </span>
               <input type="number" name="Phone" class="form-control p-3 " placeholder="" value="<?php echo $value['phone'];?>" required/>
            </div>

            <div class="input-group mt-3">
            <span class="input-group-text">
             Gender
            </span>
               <input type="Gender" name="Gender" class="form-control p-3 " placeholder="" value="<?php echo $value['gender'];?>" required/>
            </div>

            <div class="input-group mt-3">
            <span class="input-group-text">
             PassWord
            </span>
               <input type="PassWord" name="password" class="form-control p-3 " placeholder="" value="<?php echo $value['pass'];?>" required/>
            </div>

            <div class="input-group mt-3">
            <span class="input-group-text">
             ConfirmPassword
            </span>
               <input type="PassWord"  title="strong password dalna bhai/behan"  name="cpassword" value="<?php echo $value['cpass'];?>" class="form-control p-3 " placeholder="" required/>
            </div>
<button class="btn btn-lg btn-success mt-3 mb-3" name="submit">Update</button>
    			</form>
    		</div>
    		
    	</div>
    </div>

    <?php

    


  
if(isset($_POST['submit']))
     {
       $upid = $_GET['id'];
        $username= mysqli_real_escape_string($con,$_POST['Name']);
        $email= mysqli_real_escape_string($con,$_POST['Email']);
        $phone= mysqli_real_escape_string($con,$_POST['Phone']);
        $gender= mysqli_real_escape_string($con,$_POST['Gender']);
        $pass= mysqli_real_escape_string($con,$_POST['password']);
        $cpass= mysqli_real_escape_string($con,$_POST['cpassword']);
        
        $passpro=password_hash($pass,PASSWORD_BCRYPT);
        $cpasspro=password_hash($cpass,PASSWORD_BCRYPT);
        $emailquery ="select * from register where email='$email'";
        $updatequery ="update register set id=$ids
        ,name='$username',
        email='$email',
        phone =$phone,
        gender='$gender',
        pass ='$pass',
        cpass ='$cpass' where id =$upid ";

        $equery =mysqli_query($con,$updatequery);
        if($equery)
        {
        ?><script type="text/javascript">alert('ho gaya update tension na lo');</script>
        <?php
        }else
        {
        ?><script type="text/javascript">alert('nai hua');</script><?php
        }
  
        
       
                   
      }
     ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    
<!--$insertquery = "insert into Register(name,email,phone,gender,pass,cpass)values('$username','$email','$phone','$gender','$passpro','$cpasspro')";

               $result= mysqli_query($con, $insertquery);-->
     
</body>
</html>