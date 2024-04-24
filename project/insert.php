
<?php
include "connection.php";

if( $_SERVER["REQUEST_METHOD"] == "POST" )

$full_name = htmlspecialchars($_POST["full_name"]);
$email = htmlspecialchars($_POST["email"]);
$phone = htmlspecialchars($_POST["phone"]);
$address = htmlspecialchars($_POST["address"]);
$profession = htmlspecialchars($_POST["profession"]);
$city = htmlspecialchars($_POST["city"]);
$country = htmlspecialchars($_POST["country"]);

$sql= "INSERT INTO `tbluser` (`full_name`, `email`, `phone`, `address`, `profession`,`city`, `country`) VALUES ('$full_name', '$email', '$phone', '$address', '$profession', '$city', '$country')";
$result = mysqli_query($conn,$sql);
if($result){
    
//   echo "<script>alert('Data inserted Successfully!');</script>";
    header("Location: form.php");

}
else{

    echo "Data Not Inserted Successfully".mysqli_error($conn);
}
?>