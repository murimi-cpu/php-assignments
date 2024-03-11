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

    if( $_SERVER['REQUEST_METHOD'] == 'POST' )

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone= $_POST['phone'];
        $address= $_POST['address'];
        $password = $_POST['password'];

    

        $sql = "INSERT INTO `tbluser` (`full_name`, `email`, `phone`, `address`, `password`) VALUES ('Murimi James', 'murimi@gmail.com', '0725945079', '40400-63', '$2y$10$bx1dd9u9Z1R0tG9gM.HQWu/wUdJqgG165kLzWT3gBxdpd5oa0wdMO');";
        $result = mysqli_query($conn,$sql);

        if($result){

            echo "Data inserted Successfully:";
        }
        else{

            echo "Data Not Inserted Successfully".mysqli_connect_error();
        }
}
