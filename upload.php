<?php
if(isset($_POST["submit"]))
{
    $target_file = "upload/"    . basename($_FILES["fileToUpload"]["name"]);
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
    {
      echo "The file has been uploaded.";
    } 
    else 
    {
    echo "Sorry, there was an error uploading your file.";
    }
}
if(isset($_POST["deletefile"]))
{
    unlink( "upload/"."spiderman.png" );
    echo "File deleted";
}
?>