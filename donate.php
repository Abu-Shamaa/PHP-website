<?php
  include 'connection.php';
  if(isset($_POST['donate'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comments = $_POST['comments'];
    $file = $_FILES['file']['name'];

    //upload file
    if($file != '')
    {
        $ext = pathinfo($file, PATHINFO_EXTENSION);
        $allowed = ['pdf', 'txt', 'doc', 'docx', 'png', 'jpg', 'jpeg',  'gif'];
    
        //check if file type is valid
        if (in_array($ext, $allowed))
        {
            

            //set target directory
            $path = 'file/';
            move_uploaded_file($_FILES['file']['tmp_name'],($path . $file));
            
            // insert file details into database
            $sql = "INSERT INTO donate(name,email,comments,file) VALUES('$name','$email','$comments','$file')";
            mysqli_query($con, $sql);
            header("Location: donate.php?st=success");
        }
        else
        {
            header("Location: donate.php?st=error");
        }
    }
    else
        header("Location: donate.php");

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
    <script src="js/push.min.js"></script>
    <script src="js/serviceWorker.min.js"></script>
  </head>
  <body>
    <!-- include header file -->
    <?php include "includes/header2.php";?>
    <div class="container mt-3">
      <h1 class="mt-5">BMJM Donations</h1>
      <hr>
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6">
        <h3 class="mt-3 fw-bolder">Donate by Cheque</h3>
      <h5 class="mt-3">Please make cheques payable to: <strong>Baitul Mamur Jame Masjid</strong> </h5>
      <h5 class="mt-3 ">Send it to:</h5>
      <h5 class="mt-3 fw-bolder">Baitul Mamur Jame Masjid</h5>
      <h5 class="mt-3 ">Mohorkaya, Lalpur, Natore, Bangladesh.</h5>
       <h3 class="mt-5 fw-bolder">By paying direct into our bank account</h3> 

       <table class="mt-3 table table-striped">
    <tbody>
      <tr class="mt-2 fw-bolder">
        <td>Name of Beneficiary</td>
        <td>Beneficiary’s Bank & Branch</td>
        <td>Sort Code</td>
        <td>Account No</td>
      </tr>
      <tr class="mt-2">
        <td>Baitul Mamur Jame Masjid</td>
        <td>Sonali Bank, Lalpur Branch, Lalpur, Natore, 091 BSONBDDH</td>
        <td>12-36</td>
        <td>123456789</td>
      </tr>
      </tr>
    </tbody>
  </table>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 text-center">
        <h3 class="mt-3 fw-bolder ">Donate by Mobile Banking</h3>
        <img class="mt-3" src="images/bkash.jpg" alt="image" width="300" height="400">
      </div>
    </div>

    
    <div class=" mt-5 mb-5 form">
                <form action="donate.php" method="POST" enctype="multipart/form-data" autocomplete="">
                  <h3 class="text-center">Fill The Form & Send Your Recepit</h3>
    <div class="form-group">
                        <input class="form-control mt-3" type="text" name="name" placeholder="Full Name" required value="">
                    </div>
                    <div class="form-group mt-3">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required value="">
                    </div>
                    <div class="form-group mt-3">
                    <textarea class="form-control" rows="5" type="text" name="comments" placeholder="Comments"></textarea>
                    </div>
                    <div class="form-group mt-3">
                    <input type="file" id="myFile" name="file" required>
                    </div>
                    
                    <div class="form-group mt-3">
                        <input class="form-control button" type="submit" name="donate" value="Send" onclick="myFunction()">
                    </div>
                    
                </form>
              </div>
            

    </div>

    <?php include "includes/footer.php";?>

    <script>
    function myFunction() {
 alert("Thanks for Your Donation :)");
}       
    </script>
    <script>
 Push.create("<?php echo $fetch_info['name'] ?>! Make a Donation", {
    body: "The measure of life is not its duration, but its donation.",
    icon: 'images/logo.png',
    timeout: 8000,
    onClick: function () {
        window.focus();
        this.close();
    }
});
</script>  

  </body>
</html>