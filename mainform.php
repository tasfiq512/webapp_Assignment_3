<?php

  include 'database.php';

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  $sql = "INSERT INTO mainform(fname, lname, email, phone, message) VALUES('$fname','$lname','$email',$phone,'$message')";
  $result=mysqli_query($conn, $sql);

  if($result){
    header('Location: ./index.php');
  }

?>