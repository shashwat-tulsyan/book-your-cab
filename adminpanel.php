<?php
session_start();
if(!isset($_SESSION['userid']))
{
	header('location:admin.php');
}
?>
<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
          	<meta name="viewport" content="width=device=widht initial-scale=0.1" >
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Kalam&display=swap" rel="stylesheet">
            <!--ya icon la link ha-->
            <script src="https://kit.fontawesome.com/e678a5884a.js" crossorigin="anonymous"></script>
            <style type="text/css">
            *
            {
            	margin: 0;
            	padding: 0;
            	box-sizing: border-box;
            }
            body
            {
            	background: url(img/vvc.jpg);
            	background-size: 100% 100%;
            }
            html
                   {
                    font-size:62.5%;
                    /* 100% =16px
                    1px=6.25%
                    10px=62.5% 
                     */
                   }
            	.enquery
            	{
            		margin-top:30px;
            		width:50%;
            		margin: auto;
            		border-radius: 20px;
            	}
            	button
            	{
            		padding:10px 20px;
            		border-radius: 5px;
            	}
            	.logout
            	{
            		float: right;
            		margin:auto;
            	}
            	button a
            	{
            		color:white;
            		text-decoration:none;
            		font-size:10px;
            	}
            	button a:hover
            	{
            		color: white;
            	}
            </style>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<title></title>
</head>
<body>
	<div class="shashwat text-center mt-4"> 
		<h1 style="background:black; color:white; padding:2rem; border-radius:2rem; width:70%; margin: auto;"  >welcome <?php echo $_SESSION['userid'];?></h1>
			<button class=" btn-success m-auto"> <a href="logout.php">LOGOUT</a></button><br><br>

	</div><br><br><br>
<section class="enquery bg-danger text-center ">
	<h3 class="pt-4">Manage your enquery Section..</h3><br><br>
	<button class="btn-success m-auto"> <a href="es.php">click</a></button><br><br>
</section>
<br><br><br>


<section class="enquery bg-secondary text-center ">
	<h3 class="pt-4">Manage your feedback Section..</h3><br><br>
	<button class="btn-success m-auto"> <a href="fs.php">CLick</a></button><br><br>
</section>
<br><br><br>


<section class="enquery bg-light text-center ">
	<h3 class="pt-4">Manage your UserRegistration Section..</h3><br><br>
	<button class="btn-success m-auto"> <a href="urs.php">CLick</a></button><br><br>
</section>
<br><br><br>



<section class="enquery bg-warning text-center ">
	<h3 class="pt-4">Manage your user cab booking Section..</h3><br><br>
	<button class="btn-success m-auto"> <a href="bs.php">CLick</a></button><br><br>
</section>
<br><br><br>






</body>
</html>