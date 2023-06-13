<?php

$name = "";
$StartDate     = "";
$EndData       = "";
$Budget        = "";
$AreaID        = "";
$Preferences   = "";
$errors = ['name' => '', 'StartDate' => '', 'EndData' => '', 'Budget' => '', 'AreaID' => '', 'Preferences' => ''];
$status = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //var_dump($_POST);
    //insert data into my sql
    if (isset($_POST['book'])) {
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $databaseName = "tripper";

        //get values 
        if (empty($_POST['name'])) {
            $errors['name'] = 'Please, enter your full name.';
        } else {
            $name = $_POST['name'];
        }

        if (empty($_POST['StartDate'])) {
            $errors['StartDate'] = 'Please, enter start date.';
        } else {
            $StartDate  = $_POST['StartDate'];
        }

        if (empty($_POST['EndData'])) {
            $errors['EndData'] = 'Please, enter end date.';
        } else {
            $EndData  = $_POST['EndData'];
        }

        if (empty($_POST['Budget'])) {
            $errors['Budget'] = 'Please, select your budget.';
        } else {
            $Budget  = $_POST['Budget'];
        }

        if (empty($_POST['AreaID'])) {
            $errors['AreaID'] = 'Please, select at least one of your favorite areas.';
        } else {
            $AreaID  = implode("; ", $_POST['AreaID']);
        }

        if (empty($_POST['Preferences'])) {
            $errors['Preferences'] = 'Please, select at least one of your preferences.';
        } else {
            $Preferences  = implode("; ", $_POST['Preferences']);;
        }

        if (!array_filter($errors)) {
            //connect to my sql
            $conn = mysqli_connect($hostname, $username, $password, $databaseName);
            if (mysqli_connect_errno()) {
                echo "Faild to connect to mysqli :" . mysqli_connect_error();
                exit();
            }
            //mysql query to insert data
            $query = "INSERT INTO `booking`(`name`,`StartDate`,`EndData`,`Budget`,`AreaID`,`Preferences`)
                    VALUES('$name','$StartDate','$EndData','$Budget','$AreaID','$Preferences')";

            $result  = mysqli_query($conn, $query);
            //check
            if ($result) {
                $status = "<div class='alert alert-success'>Booking Done</div>";
                $name = "";
                $StartDate     = "";
                $EndData       = "";
                $Budget        = "";
                $AreaID        = "";
                $Preferences   = "";
            } else {
                $status = "<div class='alert alert-danger'>Booking Faild</div>";
            }

            mysqli_close($conn);
        }
    }
}
