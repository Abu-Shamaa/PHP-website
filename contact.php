<?php
  include 'connection.php';
  if(isset($_POST['contact'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
     $insert_data = "INSERT INTO contact (name, email, message)
                        values('$name', '$email', '$message')";
        $res = mysqli_query($con, $insert_data);

        if ($res) {
            ?>
            <script>
                alert("message sent successfully")
                document.location = 'contact.php';
            </script>
            <?php
             
        }else{
            ?>
            <script>
                alert("message not send")
                document.location = 'contact.php';
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
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 mt-5">
        <h6 class="text-uppercase mb-2 font-weight-bold">Contact Info</h6>
              <p><i class="fas fa-home mr-3"></i> Mohorkaya, Lalpur, Natore, BD</p>
              <p><i class="fas fa-envelope mr-3"></i> bmjm@gmail.com</p>
              <p><i class="fas fa-phone mr-3"></i> +8801713734204</p>
              <div class="mb-5">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3640.0034413502467!2d88.9187258149894!3d24.17161208438337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fc02e9bf19c26b%3A0x5029bc4b656a694e!2z4Kas4Ka-4KaH4Kak4KeB4KayIOCmruCmvuCmruCngeCmsCDgppzgpr7gpq7gp4cg4Kau4Ka44Kac4Ka_4Kam!5e0!3m2!1sen!2smy!4v1641818341531!5m2!1sen!2smy" width="500" height="200" style="border: none; overflow: hidden;" allowfullscreen="" loading="lazy"></iframe>
              </div>

      </div>
      <div class="col-lg-6 col-md-6 col-sm-6">
    
        <div class=" mt-5 mb-5 form">
                <form action="contact.php" method="POST" enctype="multipart/form-data" autocomplete="">
                  <h3 class="text-center">Get In Touch</h3>
                  <p>Use our contact form and we'll get back to you as soon as possible</p>
    <div class="form-group">
                        <input class="form-control mt-3" type="text" name="name" placeholder="Your Name" required value="">
                    </div>
                    <div class="form-group mt-3">
                        <input class="form-control" type="email" name="email" placeholder="Your Email" required value="">
                    </div>
                    <div class="form-group mt-3">
                    <textarea class="form-control" rows="5" type="text" name="message" placeholder="Your Message"></textarea>
                    </div>
                    
                    <div class="form-group mt-3">
                        <input class="form-control button" type="submit" name="contact" value="Send">
                    </div>
                    
                </form>
              </div>
    </div>
    </div>
            </div>
    <?php include "includes/footer.php";?>

  </body>
</html>