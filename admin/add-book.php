<?php session_start();
  require "../connection.php";
  if(isset($_POST['submit'])){
    $bname = $_POST['bname'];
    $aname = $_POST['aname'];
    $category = $_POST['category'];
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
            $path = '../library/';
            move_uploaded_file($_FILES['file']['tmp_name'],($path . $file));
            
            // insert file details into database
            $sql = "INSERT INTO library(bname,aname,category,file) VALUES('$bname','$aname','$category','$file')";
            mysqli_query($con, $sql);
            header("Location: manage-library.php?st=success");
        }
        else
        {
            header("Location: manage-library.php?st=error");
        }
    }
    else
        header("Location: manage-library.php");

    }
?>