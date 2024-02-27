<?php
$servername ="localhost";
$username = "root";
$password = "";
$dbname ="school";



$conn = mysqli_connect($servername, $username, $password, $dbname);
if($conn){
    $sql = "DELETE FROM `tblstudents` WHERE `tblstudents`.`stid` = 3";
    $result= mysqli_query($conn,$sql);
    if($result)
    {
        echo"data deleted sucessfully!";
    }
  else{
    echo "data not deleted successfully,please try again".mysqli_connect_error($result);
  }
   
    
    
}

else{

    echo "Connection failed". mysqli_connect_error();

}


?>