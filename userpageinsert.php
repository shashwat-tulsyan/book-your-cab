<?php
include"connection.php";
                         
        if(isset($_POST['submit']))
        {

           $name = $_POST['name'];
           $email = $_POST['email'];
           $sdno = $_POST['sdno'];
           $address = $_POST['address'];
           $num = $_POST['num'];
           $passenger = $_POST['passenger'];
           $vehicle = $_POST['vehicle'];
           $insertquery = "insert into cabbook(name,email,sdno,address,number,passenger,vehicle)values('$name','$email','$sdno','$address',$num,'$passenger','$vehicle')";

$result=mysqli_query($con, $insertquery);
if($result)
          {
            ?>
            <script type="text/javascript">
              alert('Are you sure you want to submit...');
              window.location.href = 'userpage.php';

            </script>

            <?php   
            }
           else
           {
             ?>
             <script type="text/javascript">
               alert('server error');
             </script>
             <?php
           }
         }

 ?>


