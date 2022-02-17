<?php
include"connection.php";
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>enquery mail control</title>
    <style type="text/css">
      *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
      body
      {
        background: url(img/mail.jpg);
        background-size: 100% 100%;
        background-repeat: no-repeat;
      }
      form
      {
        background:rgba(0, 0, 0, 0.8);
        padding:4rem;
        color: white;
        border-radius: 2rem;
      }
      .h11
      {
        border-radius:1rem;
      }
      .bbt
      {
        padding:0.4rem;
        border-radius: 1rem;
        color: black;
        margin: auto;
        margin-left:7rem;
        margin-top: 2rem;
        margin-bottom: 2rem;
      }
      .bbt a{
        text-decoration: none;
      }
    </style>
  </head>
<?php
$ids = $_GET['id'];
$showquery ="select * from enquery where id={$ids}";
$showdate = mysqli_query($con ,$showquery);
$value = mysqli_fetch_array($showdate);
?>

  <body>
    <h2 class="h11 container text-center bg-success p-3 m-auto mt-2 ">Mail Section</h2>
    <button type="submit" class="bbt"><a href="es.php">GoBack</a></button>

    <div class="container">
      
  <form method="POST" action="">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" value="<?php echo $value['email'];?>" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">UserEnquery</label>
    <input type="text" value="<?php echo $value['enquery'];?>" name="respo" class="form-control" id="exampleInputPassword1"></input>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">EnqueryResponse</label>
    <textarea type="text" name="respo" class="form-control" id="exampleInputPassword1"></textarea>
  </div>
  <button type="submit" name="submit"  class="btn btn-primary">Send</button>
</form>


    </div>

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<?php

  if(isset($_POST['submit']))
  {

   $to_email = $_POST['email'];
   $subject = "Enquery Response";
   $body = $_POST['respo'];
   $headers = "From:shashwattulsyan1998@gmail.com";

if (mail($to_email, $subject, $body, $headers)) 
{
       ?>
        <script type="text/javascript">
          alert('Mail succesfully send..');
        </script>
       <?php
} 
else {
       ?>
        <script type="text/javascript">
          alert('Mail succesfully send..');
        </script>
       <?php
     }

}


?>



   
  </body>
</html>