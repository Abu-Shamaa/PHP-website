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
    <div class="container mt-3 mb-5">
      <h1 class="mt-5 mb-5">BMJM Events</h1>

                               <main>
                    
                        
<?php 
$id=$_GET['id'];
$query=mysqli_query($con,"SELECT * FROM event WHERE id='$id'");
while($result=mysqli_fetch_array($query))
{?>
                        
                        <div class="card mb-4">
                     
                            <div class="card-body">
                                
                                <table class="table table-bordered">
                                   <tr>
                                    <th>Name</th>
                                       <td><?php echo $result['name'];?></td>
                                   </tr>
                                   <tr>
                                       <th>Event Date & Time</th>
                                       <td><?php echo $result['eventdt'];?></td>
                                   </tr>
                                   
                                     <tr>
                                       <th>Description</th>
                                       <td colspan="3"><?php echo $result['description'];?></td>
                                   </tr>
                                     
                                      
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        
                          <h3 class="mt-5 mb-5">Join as a volunteer for this Event</h3>
                          <div class="mb-5">
                            <button type="submit" name="submit" class="btn btn-primary" style="float:left;" data-bs-toggle="modal" data-bs-target="#myModal">Join</button>
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
        <div class="mb-3 mt-4">
        <div class="text-center"> <h2>Need <button class="btn btn-primary"> <?php echo $result['volunteer'];?> </button> person for this event</h2></div>
    </div>

<div class="container mt-3">
  <form action="join-volunteer.php" method="post">
                <div class="mb-3 mt-3">

      <label for="name">Full-Name</label>
      <input type="text" value="" class="form-control" placeholder="Enter name" name="name" required>
    </div>

    <div class="mb-3">
      <label for="email">Email</label>
      <input type="email" value="" class="form-control" placeholder="Enter email" name="email" required>
    </div>
    
    <div class="mb-3">
      <label for="volunteer">Phone Number</label>
      <input type="text" value="" class="form-control" placeholder="Enter Phone No" name="phone" required>
    </div>

    <div class="mb-3 mt-4">
    <button type="submit" name="submit" class="btn btn-primary">Join</button>
    </div>
  </form>
</div>

      </div>
                        </div>
                      </div>
                    </div>

                      <?php } ?>

                    
                </main>

    </div>
    <div style="padding-top: 75px;">
    <?php include "includes/footer.php";?>
</div>

  </body>
</html>