<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn){
    
    // echo"you are connected successfully!";
    
    $sql = "INSERT INTO `tblparents` (`parentid`, `parent_name`, `email`, `passord`, `city`, `country`) VALUES ('2', 'NOOR NOOR', 'noorem@gmail.com', '12244', 'KENSAS', 'UGANDA');";
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

