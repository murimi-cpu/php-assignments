<?php
$servername = "localhost";
$username = "root";
$passord = "";
$dbname = "school";
$conn = new mysqli($servername, $username, $passord, $dbname);
if ($conn->connect_error) 
   die("". $conn->connect_error);

$sql = "";
if( $_SERVER["REQUEST_METHOD"] == "POST" )
        // sanitinze the input to avoid crossscripting injections for security
        $parent_name = htmlspecialchars($_POST["parent_name"]);
        $email = htmlspecialchars(trim($_POST["email"]));
        $passord = htmlspecialchars(trim($_POST["password"]));
        $city = htmlspecialchars(trim($_POST["city"]));
        $country = htmlspecialchars(trim($_POST["country"]));
        

        // insert date into tbluser
        $sql = "INSERT INTO `tblparents` (`parent_name`, `email`, `passord`, `city`, `country`) VALUES ('$parent_name', '$email', '$passord', '$city', '$country')";
        $result = mysqli_query($conn,$sql);

        if($result){

            echo "Data inserted Successfully:";
        }
        else{

            echo "Data Not Inserted Successfully".mysqli_connect_error();
        }
mysqli_close($conn);
