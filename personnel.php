<?php
include "connection.php";

// posted from form.php

if( $_SERVER["REQUEST_METHOD"] == "POST" )

$full_name = htmlspecialchars($_POST["full_name"]);
$email = htmlspecialchars($_POST["email"]);
$phone = htmlspecialchars($_POST["phone"]);
$address = htmlspecialchars($_POST["address"]);
$profession = htmlspecialchars($_POST["profession"]);
$country = htmlspecialchars($_POST["country"]);

$sql= "INSERT INTO `tbluser` (`full_name`, `email`, `phone`, `address`, `profession`, `country`) VALUES ('$full_name', '$email', '$phone', '$address', '$profession', '$country')";
$result = mysqli_query($conn,$sql);
if($result){
    
    header("Location: form.php");

}
else{

    echo "Data Not Inserted Successfully".mysqli_error($conn);
}
