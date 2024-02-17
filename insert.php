<?php
$servername = "localhost";
$username = "root";
$password ="";
$dbs ="school";

$conn = mysqli_connect($servername,$username,$password,$dbs);
if($conn){
    
    // echo"you are connected successfully!";
    
    $sql = "INSERT INTO `tblstudents` ( `student_name`, `student_age`, `student_telno`) VALUES ('MURIMI AMMED', '32', '0725945079')";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "data is inserted successfully!";
    
    }
    else{
        echo "data not submited successfully". mysqli_error($conn);
    }}
else{
    echo "You are not connected successfully". mysqli_connect_error();
}

?>