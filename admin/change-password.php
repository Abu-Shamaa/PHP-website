<?php 
session_start();
require "../connection.php";

 // for  password change   
if(isset($_POST['update']))
{

$oldpassword=($_POST['currentpassword']); 
$newpassword=($_POST['newpassword']);
$sql=mysqli_query($con,"SELECT password FROM admin WHERE password='$oldpassword'");
if($sql)
{
$id = (isset($_GET['id']) ? $_GET['id'] : '1');
$ret=mysqli_query($con,"UPDATE admin SET password='$newpassword' WHERE id='$id'");
echo "<script>alert('Password Changed Successfully !!');</script>";
echo "<script type='text/javascript'> document.location = 'adminlogin.php'; </script>";
}
else
{
echo "<script>alert('Old Password not match !!');</script>";
echo "<script type='text/javascript'> document.location = 'change-password.php'; </script>";
}
}

    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <title>Admin Login</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
<script language="javascript" type="text/javascript">
function valid()
{
if(document.changepassword.newpassword.value!= document.changepassword.confirmpassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.changepassword.confirmpassword.focus();
return false;
}
return true;
}
</script>

    </head>
    <body class="sb-nav-fixed">
      <?php include_once('navbar.php');?>
        <div id="layoutSidenav">
          <?php include_once('sidebar.php');?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        

                        <h1 class="mt-4">Change Password</h1>
                        <div class="card mb-4">
                     <form method="post" name="changepassword" onSubmit="return valid();">
                            <div class="card-body">
                                <table class="table table-bordered">
                                   <tr>
                                    <th>Current Password</th>
                                       <td><input class="form-control" id="currentpassword" name="currentpassword" type="password" value="" required /></td>
                                   </tr>
                                   <tr>
                                       <th>New Password</th>
                                       <td><input class="form-control" id="newpassword" name="newpassword" type="password" value=""  required /></td>
                                   </tr>
                                         <tr>
                                       <th>Confirm Password</th>
                                       <td colspan="3"><input class="form-control" id="confirmpassword" name="confirmpassword" type="password"    required /></td>
                                   </tr>
                  
                                   <tr>
                                       <td colspan="4" style="text-align:center ;"><button type="submit" class="btn btn-primary btn-block" name="update">Change</button></td>

                                   </tr>
                                    </tbody>
                                </table>
                            </div>
                            </form>
                        </div>


                    </div>
                </main>
  <?php include('footer.php');?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
    </body>
</html>

