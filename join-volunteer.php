<?php 
session_start();
require "connection.php";

    
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
     $insert_data = "INSERT INTO volunteer (name, email, phone)
                        values('$name', '$email', '$phone')";
        $res = mysqli_query($con, $insert_data);

        if ($res) {
            ?>
            <script>
                alert("Thanks for joining later contact with you ")
                document.location = 'events.php';
            </script>
            <?php
             
        }else{
            ?>
            <script>
                alert("error")
                document.location = 'events.php';
            </script>
            <?php
        }
    
}
?>