<?php 
session_start();
require "../connection.php";

    
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $eventdt = date('Y-m-d H:i:s',strtotime($_POST['eventdt']));
    $description = $_POST['description'];
    $volunteer = $_POST['volunteer'];
     $insert_data = "INSERT INTO event (name, eventdt, description, volunteer)
                        values('$name', '$eventdt', '$description', '$volunteer')";
        $res = mysqli_query($con, $insert_data);

        if ($res) {
            ?>
            <script>
                alert("event added successfully")
                document.location = 'manage-event.php';
            </script>
            <?php
             
        }else{
            ?>
            <script>
                alert("event not added successfully")
                document.location = 'add-event.php';
            </script>
            <?php
        }
    
}
?>


