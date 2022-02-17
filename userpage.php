<?php
session_start(); 
if(!isset($_SESSION['username']))
{
  header('location:userlogin.php');
}
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
             <meta http-equiv="content-language" content="hi">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
          <?php
           include"connection.php"; 
          ?>
            <meta name="viewport" content="width=device=widht initial-scale=0.1" >
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Kalam&display=swap" rel="stylesheet">
            <!--ya icon la link ha-->
            <script src="https://kit.fontawesome.com/e678a5884a.js" crossorigin="anonymous"></script>
            <!--ya icon la link ha-->

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style type="text/css">
      *{
        margin:0;
        padding:0;
        box-sizing:border-box;
      }
      body
      {
        background: url(img/use.jpg);
        background-size: 100% 100%;
        background-repeat: no-repeat;
      }
       html
      
    {
      font-size:62.5%;
      /* 100% =16px
      1px=6.25%
      10px=62.5% 
      */
    }
    input
    {
      font-size: 2rem;
    }
      .user h1
      {
        border-radius:1rem;
        padding: 2rem;
      }
      button
      {
        margin-left:9%;
      }
      button a
      {
        text-decoration:none;
        color: white;
      }
      .table
      {
        font-size:1.6rem;
      }
      option
      {
        style="font-size:1.6rem;
      }
      form
      {
        background: rgba(0, 0, 0, 0.5);
        padding: 4rem;
        border-radius: 2rem;
      }
      table
      {
        background: rgba(0, 0, 0, 0.7);
        padding:5rem;
      }

    </style>
    <title>UserPage</title>
  </head>
  <body>

  <section class="slider">
   <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="500">
      <img src="img/slid1.jpg" class="d-block w-100" alt="..." height="450">
      <div class="carousel-caption d-none d-md-block mt-5">
<h1 style="background: black; color: white; padding: 2rem; border-radius: 1rem; width:50%;margin: auto;">Hey Nice To See You Again</h1>
        <h3 style="background:red; color:white; padding:1rem; width:50%;margin: auto; border-radius:2rem;">Hello <?php echo $_SESSION['username'];?></h2>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="300">
      <img src="img/slid2.jpg" class="d-block w-100" alt="..." height="450">
      <div class="carousel-caption d-none d-md-block">
        <h1 style="background: black; color: white; padding: 2rem;  width:50%;margin: auto; border-radius:1rem;">Hey Nice To See You Again</h1>
        <h3 style="background:red; color:white; padding:1rem; width:50%;margin: auto; border-radius:2rem;">Hello <?php echo $_SESSION['username'];?></h2>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/slid3.jpg" class="d-block w-100" alt="..." height="450">
      <div class="carousel-caption d-none d-md-block">
        <h1 style="background: black; color: white; padding: 2rem; width:50%;margin: auto; border-radius:1rem;">Hey Nice To See You Again</h1>
        <h3 style="background:red; color:white; padding:1rem; width:50%;margin: auto; border-radius:2rem;">Hello <?php echo $_SESSION['username'];?></h2>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


  </section>




    <div class="user">
      <h1 class="container text-center mt-3 bg-success">Book Your Cab Now...</h1>
      <button class="mr-5 bt btn-danger btn-lg" ><a href="userlogout.php">Logout</a></button>
    </div>

    <section class="tableh">
        <h2 class="container text-center mb-5 text-white">Sorry, but Right now we have limited Pickup and DropService to offer you <?php echo $_SESSION['username'];?>...</h2>
        <div class="list">

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
<section class="container forums mt-5">
  <h1 class="text-white text-center"style="font-size:6rem;"  >Book Now</h1>
    <div class="card-body mb-4">
      <form  action="userpageinsert.php" method="POST">
        <div class="input-group">
        <span class="input-group-text" style="font-size:1.6rem;">
        Full-Name
        </span>
        <input type="text"  style="font-size:1.6rem;"name="name" class="form-control p-3 " placeholder="Please Enter your FullName" required/>
            
        </div>
        <div class="input-group mt-3">
        <span class="input-group-text" style="font-size:1.6rem;">
        Registered EmailId
            </span>
               <input type="email" style="font-size:1.6rem;" name="email" class="form-control p-3 " placeholder="Email" required/>
            
            </div>

            <div class="input-group mt-3">
            <span class="input-group-text" style="font-size:1.6rem;">
              select your Sd-No from the list :
            </span>
              <select name="sdno" style="padding:9px;" style="font-size:1.6rem;">
              <option selected style="font-size:1.6rem;">--Choose--</option>
              <option values="Sd-1" style="font-size:1.6rem;">Sd-1</option>
              <option values="Sd-2"style="font-size:1.6rem;">Sd-2</option>
              <option values="Sd-3" style="font-size:1.6rem;">Sd-3</option>
              <option values="Sd-4" style="font-size:1.6rem;">Sd-4</option>
              <option values="Sd-5" style="font-size:1.6rem;">Sd-5</option>
              <option values="Sd-6" style="font-size:1.6rem;">Sd-6</option>
              <option values="Sd-7" style="font-size:1.6rem;">Sd-7</option>
              <option values="Sd-8" style="font-size:1.6rem;">Sd-8</option>
              <option values="Sd-9" style="font-size:1.6rem;">Sd-9</option>
              <option values="Sd-10" style="font-size:1.6rem;">Sd-10</option>
              <option values="Sd-11" style="font-size:1.6rem;">Sd-11</option>
              <option values="Sd-12" style="font-size:1.6rem;">Sd-12</option>
              <option values="Sd-13"style="font-size:1.6rem;">Sd-13</option>
              <option values="Sd-14"style="font-size:1.6rem;">Sd-14</option>
              <option values="Sd-15" style="font-size:1.6rem;">Sd-15</option>
              <option values="Sd-16" style="font-size:1.6rem;">Sd-16</option>
              <option values="Sd-17"style="font-size:1.6rem;">Sd-17</option>
              <option values="Sd-18"style="font-size:1.6rem;">Sd-18</option>
              <option values="Sd-19"style="font-size:1.6rem;">Sd-19</option>
              <option values="Sd-20"style="font-size:1.6rem;">Sd-20</option>

              </select>
            
            </div>

            <div class="input-group mt-3">
            <span class="input-group-text " style="font-size:1.6rem;">
             Full-PickUp-Address
            </span>
            <input type="address" name="address" style="font-size:1.6rem;" class="form-control p-3 " placeholder="Please Enter your full address.." required/>
            </div>

             <div class="input-group mt-3">
            <span class="input-group-text" style="font-size:1.6rem;">
             PhoneNO
            </span>
               <input type="number" name="num" class="form-control p-3 " style="font-size:1.6rem;" placeholder="Please enter your correct number" required/>
            
            </div>

              <div class="input-group mt-3">
            <span class="input-group-text" style="font-size:1.6rem;">
             No of passengers
            </span>
               <select name="passenger" id="cars"  style="font-size:1.6rem;"style="padding:9px;">
                <option selected style="font-size:1.6rem;">--Choose--</option>
              <option value="1" style="font-size:1.6rem;">1</option>
              <option value="2" style="font-size:1.6rem;">2</option>
              <option value="3" style="font-size:1.6rem;">3</option>
              <option value="4" style="font-size:1.6rem;">4</option>
              <option value="5" style="font-size:1.6rem;">5</option>
              <option value="6" style="font-size:1.6rem;">6</option>
              
              

              </select>
            
            </div>
            <div class="input-group mt-3">
            <span class="input-group-text" style="font-size:1.6rem;">
            vehicle type
            </span>
               <select name="vehicle" id="cars" style="font-size:1.6rem;" style="padding:9px;">
                <option selected style="font-size:1.6rem;">--Choose--</option>
              <option value="Four wheeler" style="font-size:1.6rem;">Four wheeler</option>
              <option value="Two wheeler" style="font-size:1.6rem;">Two wheeler</option>

            </select>&#160 &#160
                             <h3 style="color:white;">**Two wheeler is avilable for only one person.</h3>

            
            </div>
            




</div>
<button class="m-auto btn btn-lg btn-success mt-3 mb-3" onclick="clickme()" name="submit">BookNow</button>
</form>
</div>
</section>
 
<script>
   function clickme()
   {
    alert('we will soon send you the conformation mail..');
   }
 </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



</body>



</html>


