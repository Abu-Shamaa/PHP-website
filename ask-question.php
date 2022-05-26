<?php
  include 'connection.php';
  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $question = $_POST['question'];
    
     $insert_data = "INSERT INTO question (name, email, question)
                        values('$name', '$email', '$question')";
        $res = mysqli_query($con, $insert_data);

        if ($res) {
            ?>
            <script>
                alert("question sent successfully")
                document.location = 'home.php';
            </script>
            <?php
             
        }else{
            ?>
            <script>
                alert("question not send")
                document.location = 'ask-question.php';
            </script>
            <?php
        }


    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>BMJM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <!-- include header file -->
    <?php include "includes/header2.php";?>
    <div class="container mt-3">
    
    <div class=" mt-5 form">
                <form action="ask-question.php" method="POST" enctype="multipart/form-data" autocomplete="">
                  <h3 class="text-center">Fill The Form & Send Your Question</h3>
    <div class="form-group">
                        <input class="form-control mt-3" type="text" name="name" placeholder="Full Name" required value="">
                    </div>
                    <div class="form-group mt-3">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required value="">
                    </div>
                    <div class="form-group mt-3">
                    <textarea class="form-control" rows="5" type="text" name="question" placeholder="Question"></textarea>
                    </div>
                    
                    
                    <div class="form-group mt-3">
                        <input class="form-control button" type="submit" name="submit" value="Send">
                    </div>
                    
                </form>
              </div>
            

    </div>

    <?php include "includes/footer.php";?>

  </body>
</html>