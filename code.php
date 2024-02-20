<?php
session_start();
require "dbcon.php";

if(isset($_POST['post']))
    $filename = mysqli_real_escape_string($conn, $_POST['filename']);
    $deadline = mysqli_real_escape_string($conn, $_POST['deadline']);

    $query = "INSERT INTO filesubmission (filename, deadline) VALUES ('$filename', '$deadline')";
    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['message'] = "File Request Successful!"
        header("Location: create.php");
        exit (0);
    }
    else{
        $_SESSION['message'] = "File Request Failed!"
        header("Location: create.php");
        exit (0);
    }

?>