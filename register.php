<?php
$servername = "localhost";
$username = "root";
$password = "";

$database = "school";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){

    echo "You are not connected Successfully".mysqli_connect_error();
}
else{
        // use superglobal variable to check request method and allow code to run if true
    if( $_SERVER["REQUEST_METHOD"] == "POST" )
        // sanitinze the input to avoid crossscripting injections for security
        $fullname = $_POST["fullname"];
        $email = $_POST["email"];
        $phone= $_POST["phone"];
        $address = $_POST["address"]; 
        $profession = $_POST["profession"];
        $country =  $_POST["country"];
        $password = $_POST["password"];

        // insert date into tbluser
        $sql = "INSERT INTO `tbluser` (`full_name`, `email`, `phone`, `address`, `password`) VALUES ('$fullname', '$email', '$phone', '$address',' $profession,'$country', '$password')";
        $result = mysqli_query($conn,$sql);

        if($result){

            echo "Data inserted Successfully:";
        }
        else{

            echo "Data Not Inserted Successfully".mysqli_connect_error();
        }
}
