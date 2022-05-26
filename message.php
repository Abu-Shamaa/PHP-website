<?php
  include 'connection.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        
        <style type="text/css">
        *{
        margin: 0; padding: 0; box-sizing: border-box;
        }
        </style>
    </head>
    <body>
<?php include "includes/header2.php";?>
<div class="container-fluid p-3  bg-info text-white text-center">
        <h2><strong><em>All Question and Answer</strong></em></h2>
    </div>
    
    <div class="container">

        <?php $ret=mysqli_query($con,"SELECT * FROM question");
        $cnt=1;
        while($row=mysqli_fetch_array($ret))
        {?>
        
        
        <h3 class="mt-5"><?php echo $cnt;?>-Question: <?php echo $row['question'];?></h3>
        <h3 class="mt-3 mb-5">Answer: <?php echo $row['answer'];?></h3>
        
        <?php $cnt=$cnt+1; }?>
        
        
    </div>
    <div style="padding-top: 300px;">
    <?php include "includes/footer.php";?>
</div>
    </body>
</html>