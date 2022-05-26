<?php session_start();
require "../connection.php";

//Code for Updation 
if(isset($_POST['submit']))
{
    $answer=$_POST['answer'];

$id=$_GET['id'];
    $msg=mysqli_query($con,"UPDATE question SET answer='$answer' where id='$id'");

if($msg)
{
    echo "<script>alert('Reply send successfully');</script>";
       echo "<script type='text/javascript'> document.location = 'manage-question.php'; </script>";
};
};


    
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

    </head>
    <body class="sb-nav-fixed">
      <?php include_once('navbar.php');?>
        <div id="layoutSidenav">
         <?php include_once('sidebar.php');?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        
<?php 
$id=$_GET['id'];
$query=mysqli_query($con,"SELECT * FROM question WHERE id='$id'");
while($result=mysqli_fetch_array($query))
{?>
                        <h3 class="mt-4 mb-4">Reply to <?php echo $result['name'];?>'s question</h3>
                        <div class="card mb-4">
                     <form method="post">
                            <div class="card-body">
                                <table class="table table-bordered">
                                   <tr>
                                    <th>Name</th>
                                       <td><?php echo $result['name'];?></td>
                                   </tr>
                                   <tr>
                                       <th>Email</th>
                                       <td><?php echo $result['email'];?></td>
                                   </tr>
                                         <tr>
                                       <th>Question</th>
                                       <td><?php echo $result['question'];?></td>
                                   </tr>
                                   <tr>
                                    <th>Answer</th>
                                       <td><textarea rows="5" cols="150" type="text" name="answer" placeholder="Answer"></textarea></td>
                                   </tr>
                               
                                     
                                        
                                   <tr>
                                       <td colspan="4" style="text-align:center ;"><button type="submit" class="btn btn-primary btn-block" name="submit">Send</button></td>

                                   </tr>
                                    </tbody>
                                </table>
                            </div>
                            </form>
                        </div>
<?php } ?>

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

