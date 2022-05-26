<?php 
require "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>BMJM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <!-- include header file -->
    <?php include "includes/header2.php";?>
    <div class="container mt-3">
      <h1 class="mt-5 mb-4">BMJM Library</h1>

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
                                    
                                    <tbody>
                              
                              <?php
                              $selectquery = "SELECT * FROM library"; 
                              $query=mysqli_query($con, $selectquery);
                              $nums =mysqli_num_rows($query);
                              $cnt=1;
                              while($row=mysqli_fetch_array($query))
                              {?>
                              <tr>
                              <td><?php echo $cnt;?></td>
                                  <td><?php echo $row['bname'];?></td>
                                  <td><?php echo $row['aname'];?></td>
                                  
                                  <td><?php echo $row['category'];?></td>
                                  <td><?php echo $row['file'];?></td>
                                     
                                   <td>  <a href="library/<?php echo $row['file'];?>"> 
                          <i class="fas fa-download"></i></a>
                                     
                                  </td>
                              </tr>
                              <?php $cnt=$cnt+1; }?>
                                      
                                    </tbody>
                                </table>
                            </div>
                        </div>

    </div>
    <?php include "includes/footer.php";?>

  </body>
</html>