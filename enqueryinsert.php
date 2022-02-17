<?php
      include"connection.php";


        if(isset($_POST['submit']))
        {

           $name=$_POST['user'];
           $email =$_POST['mail'];
           $enquery =$_POST['enquery'];


       $insertquery = "insert into enquery(name,email,enquery)values('$name','$email','$enquery')";

           $result= mysqli_query($con, $insertquery);
           header('location:cab.php');
           if($result)
           {
            ?>
            <script type="text/javascript">
              //alert("Are you sure you want to post this");

            </script>
            <?php
           }
           else
           {
            ?>
            <script type="text/javascript">
              //alert("not inserted");
            </script> 
            <?php
           }

        }

       ?>