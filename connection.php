                <?php
                   
                    $username = "root";
                    $password ="";
                    $server ="localhost";
                    $database ="taxi";

                    $con= mysqli_connect($server,$username,$password,$database);
                   
                    if($con)
                    {
                        ?>
                        <script type="text/javascript">
                          //  alert('server loaded....');
                        </script>
                        <?php
                    }
                    else
                    {
                        ?>
                        <script type="text/javascript">
                            alert('there was a fault in server...');
                        </script>
                        <?php
                    }
                ?>