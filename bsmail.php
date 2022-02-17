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

    <title>cabbooking mail control</title>
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
        background: rgba(0, 0, 0, 0.8);
        padding: 3rem;
        border-radius: 2rem;
        color: white;
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
      table{
            color: white;
            background: rgba(0, 0, 0, 0.7);
            padding: 3rem;
            border-radius:2rem; 
      }
    </style>
  </head>
<?php
$ids = $_GET['id'];
$showquery ="select * from cabbook where id={$ids}";
$showdate = mysqli_query($con ,$showquery);
$value = mysqli_fetch_array($showdate);
?>

  <body>
    <h2 class="h11 container text-center bg-success p-3 m-auto mt-2 ">Mail Section</h2>
    <button type="submit" class="bbt"><a href="bs.php">GoBack</a></button>

    <div class="container">
      
  <form method="POST" action="">
  <div class="mb-3">
    <label  class="form-label">Name</label>
    <input type="text" value="<?php echo $value['name'];?>" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">EmailID</label>
    <input type="email" value="<?php echo $value['email'];?>" name="email" class="form-control" id="exampleInputPassword1"></input>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Number</label>
    <input type="number" value="<?php echo $value['number'];?>" name="number" class="form-control" id="exampleInputPassword1"></input>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Your Sd-No</label>
    <input type="number" value="<?php echo $value['sdno'];?>" name="number" class="form-control" id="exampleInputPassword1"></input>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Please Conform the user booking</label>
    <input type="text" name="respo" value="Congrates your booking order is Confirmed, see you tomorrow.One of our company taxi driver will contact on your number tomorrow..And tomorrow only you have to pay the total cash to our company driver
    Happy Journey" class="form-control" id="exampleInputPassword1"></input>
  </div>
  <button type="submit" name="submit"  class="btn btn-primary">Send</button>
</form>


    </div>

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<div>
  <h1 class="text-white text-center mt-4">Recheck Section</h1>
</div>

<section>
  
   <table class="container table text-white">
  <thead>
    <tr>
      <th scope="col">SdNo</th>
      <th scope="col">Source</th>
      <th scope="col">Destination</th>
      <th scope="col">Price</th>
      <th scope="col">SdNo</th>
      <th scope="col">Source</th>
      <th scope="col">Destination</th>
      <th scope="col">Price</th>


    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">sd-1</th>
      <td>Varanasi</td>
      <td>Kanpur</td>
      <td>8000/=</td>
      <th scope="row">sd-2</th>
      <td>Varanasi</td>
      <td>Lucknow</td>
      <td>5000/=</td>
    </tr>
    <tr>
      <th scope="row">sd-3</th>
      <td>Varanasi</td>
      <td>Agra</td>
      <td>9000/=</td>
      <th scope="row">sd-4</th>
      <td>Varanasi</td>
      <td>Allhabad</td>
      <td>5000/=</td>
    </tr>
    <tr>
      <th scope="row">sd-5</th>
      <td>Varanasi</td>
      <td>Bareilly</td>
      <td>8000/=</td>
      <th scope="row">sd-6</th>
      <td>Varanasi</td>
      <td>Gorakhpur</td>
      <td>10,000/=</td>
    </tr>
    <tr>
      <th scope="row">sd-7</th>
      <td>Varanasi</td>
      <td>Jhasi</td>
      <td>5500/=</td>
      <th scope="row">sd-8</th>
      <td>Varanasi</td>
      <td>Mathura</td>
      <td>12000/=</td>
    </tr>
    <tr>
      <th scope="row ">sd-9</th>
      <td>Varanasi</td>
      <td>Ghaziabad</td>
      <td>9000/=</td>
      <th scope="row">sd-10</th>
      <td>Varanasi</td>
      <td>Jaunpur</td>
      <td>4500/=</td>
    </tr>
    <tr>
      <th scope="row">sd-11</th>
      <td>Varanasi</td>
      <td>Mirjapur</td>
      <td>4000/=</td>
      <th scope="row">sd-12</th>
      <td>Varanasi</td>
      <td>Delhi</td>
      <td>15000/=</td>
    </tr>
    <tr>
      <th scope="row">sd-13</th>
      <td>Varanasi</td>
      <td>Saharanpur</td>
      <td>5500/=</td>
      <th scope="row">sd-14</th>
      <td>Varanasi</td>
      <td>Rampur</td>
      <td>6700/=</td>
    </tr>
    <tr>
      <th scope="row">sd-15</th>
      <td>Varanasi</td>
      <td>Budaun</td>
      <td>7000/=</td>
      <th scope="row">sd-16</th>
      <td>Varanasi</td>
      <td>Muzaffarnagar</td>
      <td>8230/=</td>
    </tr>
    <tr>
      <th scope="row">sd-17</th>
      <td>Varanasi</td>
      <td>Mau</td>
      <td>9900/=</td>
      <th scope="row">sd-18</th>
      <td>Varanasi</td>
      <td>Firozabad</td>
      <td>11000/=</td>
    </tr>
    <tr>
      <th scope="row">sd-19</th>
      <td>Varanasi</td>
      <td>Moradabad</td>
      <td>5600/=</td>
      <th scope="row">sd-20</th>
      <td>Varanasi</td>
      <td>Aligarh</td>
      <td>6600/=</td>
    </tr>
    
 </tbody>
</table>
          
        </div>
    </section>




<?php

  if(isset($_POST['submit']))
  {

   $to_email = $_POST['email'];
   $subject = "Cab Boking Conformation ";
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