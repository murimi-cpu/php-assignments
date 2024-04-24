
<?php
include "connection.php";
if( $_SERVER["REQUEST_METHOD"] == "POST" ){
$full_name = htmlspecialchars($_POST["full_name"]);
$email = htmlspecialchars($_POST["email"]);
$phone = htmlspecialchars($_POST["phone"]);
$address = htmlspecialchars($_POST["address"]);
$profession = htmlspecialchars($_POST["profession"]);
$country = htmlspecialchars($_POST["country"]);
$city = htmlspecialchars($_POST["city"]);

$id =$_GET['dataupdate'];
// echo";
$sql= "UPDATE `tbluser` SET `full_name` = '$full_name', `profession` = '$profession', `country` = '$country', `city`= '$city',`address`= '$address',`email`='$email', `phone`='$phone'  WHERE `tbluser`.`userid` = $id";

$result = mysqli_query($conn,$sql);
if($result){

    echo   "data Updated Successfully!";

    header("Location: form.php");

}
else{
    echo "Data not Deleted ssuccesfully";
   }   exit();
}
   ?>

    


