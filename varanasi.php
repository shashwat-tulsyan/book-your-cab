<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="varanasi.css">
    <meta charset="utf-8">
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
    <style type="text/css">
      body
      {
        
background-color: #cdedfd;
background-image: linear-gradient(319deg, #cdedfd 0%, #ffec82 37%, #ffcfd2 100%);

      }
    </style> 
  <?php include "connection.php";
        //include "insertvaranasi.php";
   ?>    
    <title>welcome to varanasi</title>
  </head>
  <body>
    <section class="navie">
                      <p id="time"></p>
                      <div class="nav">
                        <ul data-aos="zoom-in-up">
                          <li><a href="cab.php">Home</a></li>
                          <li><a href="4wheeler.php">4Wheeler</a></li>
                          <li><a href="2wheeler.php">2Wheeler</a></li>
                          <li><a href="Varanasi.php">VnsBlog</a></li>
                          <li><a href="register.php">Register</a></li>
                          <li><a href="userlogin.php">UserLogin</a></li>
                          <li><a href="admin.php">AdminLogin</a></li>
                          <div class="iconi"data-aos="zoom-in-down">
                             <ul class="">
                              <li><a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a></li>
                              <li><a href="https://www.whatsapp.com/"><i class="fab fa-whatsapp"></i></a></li>
                              <li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
                              <li><a href="https://www.linkedin.com/notifications/?filter=all"><i class="fab fa-linkedin"></i></a></li>
                     

                             </ul>
                          </div>
                      </ul>
                      </div>
                                           
                    </section>
                    <div>
                      <h1 style="font-size:3rem;text-align: center; margin: 3rem;">Famous Places where you can travel...</h1>
                    </div>

                    <!-- ***********************************************************-->
                    <section class="row1" data-aos="zoom-in">
                      <h1>Mera Varansi</h1>
                      <div class="vns1">
                        <img src="images/vns1.jpg" width="600" height="400">
                        <p>Lying in the south of Uttar Pradesh, on the banks of the holy River Ganga, breathes Varanasi, which is believed  to be the  the oldest living city in the world. For centuries, the mystic of this place has been attracting pilgrims from across India as well as abroad. A dwelling of ancient domes, muths, ashrams, priests, narrow lanes with shops filled with Benaresi sarees, Varanasi represents the colorful and fascinating India of your dreams. With intimate rituals of life and death being parallelly performed on the Ghats, you’ll find it exhilarating to explore the religious geography of this city. </p>
                      </div>
                      
                    </section>
                    <!-- ***********************************************************-->

                    <section class="row1"  data-aos="zoom-out">
                      <h1>Kashi Vishwanath Temple</h1>
                      <div class="vns1">
                        <p style="padding-left:-3rem; margin-left:-3rem;">Kashi Vishvanath Temple is one of the most famous Hindu temples dedicated to Lord Shiva. It is located in Varanasi, Uttar Pradesh, India. The temple stands on the western bank of the holy river Ganga, and is one of the twelve Jyotirlingas, the holiest of Shivatemples. The main deity is known by the name Vishvanatha or Vishveshvara meaning Ruler of The Universe. Varanasi city is also called Kashi, and hence the temple is popularly called Kashi Vishvanath Temple</p>
                      
                      <img src="images/vns2.jpg" width="600" height="400" style="padding-left: 2rem;">
                      
                    </div>
                    </section>
         <!-- ***********************************************************-->

                     <section class="row1" data-aos="zoom-in">
                      <h1>VaransiCantt</h1>
                      <div class="vns1">
                        <img src="images/vns3.jpg" width="600" height="400">
                        <p>Varanasi cantonment is a census town in Varanasi tehsil of Varanasi district in the Indian state of Uttar Pradesh.The census town does not have a gram panchayat.Varanasi Cantonment Census town is about 2 kilometers West of Varanasi railway station, 324 kilometers South-East of Lucknow and 12 kilometers North of Banaras Hindu University.</p>
                      </div>
                      
                    </section>
          <!-- ***********************************************************-->

           <!-- ***********************************************************-->

                     <section class="row1" data-aos="zoom-in">
                      <h1>Sarnath</h1>
                      <div class="vns1">
                        <img src="images/sar.jpg" width="600" height="400">
                        <p>Sarnath is a place located 10 kilometres north-east of Varanasi near the confluence of the Ganges and the Varuna rivers in Uttar Pradesh, India. The Deer Park in Sarnath is where Gautama Buddha first taught the Dharma, and where the Buddhist Sangha came into existence through the enlightenment of Kondanna.</p>
                      </div>
                      
                    </section>
          <!-- ***********************************************************-->

                    <section class="food" data-aos="zoom-out">
                      <h1>Varanasi Foods</h1>
                      <div class="foodrow">
                      <img src="images/fd6.jpg" >
                      <img src="images/fd5.jpg" >
                      <img src="images/fd4.jpg" >
                      
                    </div>
                    <div class="foodrow">
                      <img src="images/fd3.jpg" >
                      <img src="images/fd2.jpg" >
                      <img src="images/fd1.jpg" >
                      
                    </div>
                    </section>
                     <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
       offset:200, // offset (in px) from the original trigger point
       //delay: 0, // values from 0 to 3000, with step 50ms
       duration:700,
    });
  </script>
       
    <section class="feedback" data-aos="zoom-in">
      <h2>share your experience with us.....</h2>
      <div class="form1">
        <form method="POST" action="insertvaranasi.php">
          <label>Name</label><br>
          <input required="submit" width="100%" type="text" name="user" style="padding:0.6rem; border-radius: 2rem;"/><br><br>
          <label>Comment(max-words50)</label><br>
          <textarea required="https" name="text" cols="40" rows="8" style="border-radius: 3rem; padding:3rem;"></textarea><br>
          <button name="submit" id="submit" onclick="postnow()">Post</button>
          </form>
                  
                  
            </div>
      </section>
<script type="text/javascript">
  function postnow()
  {
      alert("are you sure");
  }
</script>

<section class="seepost" style="width:40%;margin:auto; margin-top: 4rem; " data-aos="">
  

<?php

$selectquery ="select * from feedback";
$query = mysqli_query($con,$selectquery);

while($res = mysqli_fetch_array($query))
{
   ?>
   <div class="postborder" style="border:1px solid black;border-radius:3rem; background:orange;">
     <h1 style="padding:2rem; font-size:3rem"><?php echo $res['name'];?>:</h1>
     <p style="padding:3rem; font-size:2rem"><?php echo $res['comment'];?></p>
   </div>
   <?php
}

?>
</section>
   <!-- ***********************************************************-->


   <section class="" style="background:yellow; width:90%;margin: auto;text-align:center;margin-top: 3em; padding:4rem;border-radius:2rem ;">
     <footer>
         <div>
             <h3 style="font-size:2rem;">
              About Us <br><br>Varanasi Taxi Services Offers Taxi in Varanasi. Book Full Day Taxi In Varanasi. Varanasi Airport Transfer, Car Rental From Varanasi, Varanasi Sight Seen, Varanasi Temple Tour, Varanasi Car Rental Services, Varanasi Taxi Services. Hassle-free booking and enjoy your travel. Happy traveling!!
              Registred by Labour department of U.P. Gov.<br>
               <div >
              <a href="https://www.facebook.com/" style="margin:1rem;"><i class="fab fa-facebook"></i></a>
              <a href="https://www.whatsapp.com/"style="margin:1rem;"><i class="fab fa-whatsapp"></i></a>
              <a href="https://www.instagram.com/"style="margin:1rem;"><i class="fab fa-instagram"></i></a>
              <a href="https://www.linkedin.com/signup"style="margin:1rem;"><i class="fab fa-linkedin"></i></a>
              </div>
              <br>Contact:7007302771
              <br>Email:shashwattulsyan1998@gmail.com
              <br>&copyshashwattulsyan
              </h3>

         </div>
     </footer>
   </section>
    
  </body>
</html>