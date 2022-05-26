<?php session_start();
require "../connection.php";
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
$query=mysqli_query($con,"SELECT * FROM library WHERE id='$id'");
while($result=mysqli_fetch_array($query))
{?>
                        <h1 class="mt-4 mb-3"> Book Details</h1>
                        <div class="card mb-4">
                     
                            <div class="card-body">
                                <a href="edit-book.php?id=<?php echo $result['id'];?>">Edit</a>
                                <table class="table table-bordered">
                                   <tr>
                                    <th>Book Name</th>
                                       <td ><?php echo $result['bname'];?></td>
                                   </tr>
                                   <tr>
                                       <th>Author Name</th>
                                       <td ><?php echo $result['aname'];?></td>
                                   </tr>
                                   
                                     <tr>
                                       <th>Category</th>
                                       <td ><?php echo $result['category'];?></td>
                                   </tr>
                                     
                                      
                                    </tbody>
                                </table>
                            </div>
                        </div>
<?php } ?>

                    </div>
                </main>
          <?php include('footer.php');?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
    </body>
</html>
