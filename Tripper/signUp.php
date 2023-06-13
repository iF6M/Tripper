<?php
//insert data into my sql
if(isset($_POST['insert'])){
    $hostname ="localhost";
    $username = "root";
    $password = "";
    $databaseName = "tripper";

 //get values 

    $name      = $_POST['UserName'];
    $email     = $_POST['UserEmail'];
    $uPassword = $_POST['Password'];
    $Country   = $_POST['Country'];
    $Sex       = $_POST['Sex'];
    $Birthday  = $_POST['Birthday'];
    $PhoneNo   = $_POST['PhoneNo'];
//connect to my sql
$conn = mysqli_connect($hostname,$username,$password,$databaseName);
if(mysqli_connect_errno()){
    echo "Faild to connect to mysqli :".mysqli_connect_error();
    exit();
}
//mysql query to insert data
$query = "INSERT INTO `users`(`Username`,`UserEmail`,`Password`,`Country`,`Sex`,`Birthday`,`PhoneNo`)
VALUES ('$name','$email','$uPassword','$Country','$Sex','$Birthday','$PhoneNo')";
$result = mysqli_query($conn,$query);
//check
if($result){
    header("location:book.php");
    exit();
}
else{
    header("location:index.html");
    exit();

}
mysqli_close($conn);
}
?>