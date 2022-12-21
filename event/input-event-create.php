<?php
    // Check If form submitted, insert form data into users table.
    // if(isset($_POST['submit'])) {
    //     $name = $_POST['name'];
    //     $description = $_POST['description'];
    //     $date = $_POST['date'];
    //     $time = $_POST['time'];
    //     $status = $_POST['status'];
        
    //     // include database connection file
    //     include_once("koneksi.php");
                
    //     // Insert user data into table
    //     $result = mysqli_query($conn, "INSERT INTO event(subject, description, date,time,status) VALUES('$name', '$description', '$date','$time','$status')");

    //     header("location: input-event.php");
    //     exit;
    // }

    include '../koneksi.php';
    $name = $_POST['name'];
    $description = $_POST['description'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    // $status = isset($_POST['status']) ? 1 : 0;

    mysqli_query($conn, "INSERT INTO event VALUES('','$name', '$description', '$date','$time','')");

    header("location:../index.php");
?>
