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
    if( $_SERVER['REQUEST_METHOD'] == 'POST' )
        // sanitinze the input to avoid crossscripting injections for security
        $name = htmlspecialchars($_POST['name'];)
        $email = htmlspecialchars($_POST['email'];)
        $phone= htmlspecialchars($_POST['phone'];)
        $address= htmlspecialchars($_POST['address'];)
        $password = htmlspecialchars($_POST['password'];)

        // insert date into tbluser
        $sql = "INSERT INTO `tbluser` (`full_name`, `email`, `phone`, `address`, `password`) VALUES ('Murimi James', 'murimi@gmail.com', '0725945079', '40400-63', '$2y$10$bx1dd9u9Z1R0tG9gM.HQWu/wUdJqgG165kLzWT3gBxdpd5oa0wdMO');";
        $result = mysqli_query($conn,$sql);

        if($result){

            echo "Data inserted Successfully:";
        }
        else{

            echo "Data Not Inserted Successfully".mysqli_connect_error();
        }
}
