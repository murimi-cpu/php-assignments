 <?php

include "connection.php";

$userid =$_GET['userid'];


if( $_SERVER["REQUEST_METHOD"] == "POST" )

$full_name = htmlspecialchars($_POST["full_name"]);
$email = htmlspecialchars($_POST["email"]);
$phone = htmlspecialchars($_POST["phone"]);
$address = htmlspecialchars($_POST["address"]);
$profession = htmlspecialchars($_POST["profession"]);
$country = htmlspecialchars($_POST["country"]);

// echo";
$sql = "UPDATE 'tbluser' SET 'full_name' = '$full_name',	'email'= '$email',	'phone'=' $phone', 	'address'='$address', 	'profession'='$profession', 'city'='$city', 'country'='$country' 	

WHERE userid = $userid";

$result = mysqli_query($conn,$sql);
if($result){

    echo   "data Updated Successfully!";

    header("Location: form.php");

}
else{
    echo "Data not Deleted ssuccesfully";
   }   exit();