<?php

// php code to Insert data into mysql database from input text
if(isset($_POST['insert']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "tripper";
   
    // get values form input text and number

    $name      = $_POST['UserName'];
    $email     = $_POST['UserEmail	'];
    $uPassword = $_POST['Password'];
    $country   = $_POST['Country'];
    $Sex       = $_POST['Sex'];
    $birthday  = $_POST['Birthday'];
    $PhoneNo   = $_POST['PhoneNo'];

   
    // connect to mysql database using mysqli

    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
        //  if(mysqli_connect_errno()) {
        if (mysqli_connect_errno($connect)){

        echo "Failed to connect to MySQL: ". mysqli_connect_error();
        exit();
      }
   
    // mysql query to insert data

    $query = "INSERT INTO `signup`(`name`, `email`, `Password`, `gender`,`country`,`birthday`)
    VALUES ('$name','$email' ,'$Password','$gender','$country','$birthday')";
   
    $result = mysqli_query($connect,$query);
   
    // check if mysql query successful

    if($result)
    {
      header("location:book.php");
      exit();
    }
   
    else{
       header("location:index.html");
      exit();
    }
   
 
    mysqli_close($connect);
}

   


?>