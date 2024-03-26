<?php
include "connection.php";

$userid =$_GET['del'];

// echo "$userid";
$sql = "DELETE FROM `tbluser` WHERE `userid` = $userid";
$result = mysqli_query($conn,$sql);
if($result){

    echo   "data deleted successfully";

    header("Location: form.php");

}
else{
    echo "Data not Deleted ssuccesfully";
    exit();
}