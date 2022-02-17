<?php
        include "connection.php";
        if(isset($_POST['submit']))
        {

           $name=$_POST['user'];
           $comment =$_POST['text'];

        $insertquery = "insert into feedback(name,comment)values('$name','$comment')";

           $result= mysqli_query($con, $insertquery);
           header('location:varanasi.php');
           if($result)
           {

            ?>
            <script type="text/javascript">
             // alert("Are you sure you want to post this");

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