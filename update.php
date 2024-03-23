<?php 

// $servername = "localhost";

// $username = "root";

// $password = "";

// $database = "school";

// $conn = mysqli_connect($servername,$username,$password,$database);

// if(!$conn){

//     echo "Not connected" . mysqli_connect_error();
// }
// else{
    
include "connection.php";

    $emp_name = "Murimi James";
    $emp_salary = "120,000";
    $sql = "UPDATE `tblemployee` SET `emp_name`='Murimi Gosiani',`emp_salary`='200000' WHERE 1";
    
    $result = mysqli_query($conn,$sql);

    if($result){

        echo "Updated Successfully";
    }
    else{

        echo "Not Updated Successfully".mysqli_error($conn);
    }





