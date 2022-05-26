<?php session_start();
require "../connection.php";

// for deleting event
if(isset($_GET['id']))
{
$id=$_GET['id'];
$query=mysqli_query($con,"DELETE FROM library WHERE id='$id'");
$query_run = mysqli_query($con, $query);
if($query_run)
{
echo "<script>alert('Data deleted');</script>";
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

    </head>
    <body class="sb-nav-fixed">
      <?php include_once('navbar.php');?>
        <div id="layoutSidenav">
         <?php include_once('sidebar.php');?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Manage Library</h1>
                        <div class="mb-3">
                            <button type="submit" name="submit" class="btn btn-primary" style="float:right;" data-bs-toggle="modal" data-bs-target="#myModal">Add Book</button>
                        </div>
                        <!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
<div class="container mt-3">
  <form action="add-book.php" method="POST"enctype="multipart/form-data" autocomplete="">
                <div class="mb-3 mt-3">
      <label for="bname">Book-Name</label>
      <input type="text" value="" class="form-control" placeholder="Enter book name" name="bname" required>
    </div>
    <div class="mb-3">
      <label for="aname">Author-Name</label>
      <input type="text" value="" class="form-control" placeholder="Enter author name" name="aname" required>
    </div>
    <div class="mb-3">
      <label for="category">Category</label>
      <input type="text" value="" class="form-control" placeholder="Enter category" name="category" required>
    </div>
    <div class="mb-3">
     <label for="file">Book</label>
      <input type="file" id="myFile" name="file" required>
    </div>

    <div class="mb-3 mt-4">
    <button type="submit" name="submit" class="btn btn-primary">Add Book</button>
    </div>
  </form>
</div>

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Manage Book</li>
                        </ol>
            
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Book Details
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                             <th>Sno.</th>
                                  <th>Book Name</th>
                                  <th> Author Name</th>
                                  <th>Category</th>
                                  <th>Book</th>
                                  <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                             <th>Sno.</th>
                                              <th>Book Name</th>
                                  <th> Author Name</th>
                                  <th>Category</th>
                                  <th>Book</th>
                                  <th>Action</th>

                                        </tr>
                                    </tfoot>
                                    <tbody>
                                              <?php $ret=mysqli_query($con,"SELECT * FROM library");
                              $cnt=1;
                              while($row=mysqli_fetch_array($ret))
                              {?>
                              <tr>
                              <td><?php echo $cnt;?></td>
                                  <td><?php echo $row['bname'];?></td>
                                  <td><?php echo $row['aname'];?></td>
                                  
                                  <td><?php echo $row['category'];?></td>
                                  <td><?php echo $row['file'];?></td>
                                  
                                   <td>  
                                     <a href="book.php?id=<?php echo $row['id'];?>"> 
                          <i class="fas fa-edit"></i></a>
                                     <a href="manage-library.php?id=<?php echo $row['id'];?>" onClick="return confirm('Do you really want to delete');"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                  </td>
                              </tr>
                              <?php $cnt=$cnt+1; }?>
                                      
                                    </tbody>
                                </table>
                            </div>
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
