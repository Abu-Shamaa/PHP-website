<?php session_start();
require "connection.php";

//Code for Updation 
if(isset($_POST['edit']))
{
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];

  $id = (isset($_GET['id']) ? $_GET['id'] : '21');
    $msg=mysqli_query($con,"UPDATE usertable SET name='$name', phone='$phone',address='$address' where id='$id'");

if($msg)
{
    echo "<script>alert('profile updated successfully');</script>";
       echo "<script type='text/javascript'> document.location = 'home.php'; </script>";
};
};


    
?>