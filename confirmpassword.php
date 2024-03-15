<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Password</title>
</head>
<body>

<form action="confirmpassword.php" method = "post">

    <label for="student_name">Student Name:</label>
    <input type="text" name="student_name" placeholder="Enter your name:">

    <label for="admno">Admission Number:</label>
    <input type="text" name="admno" placeholder="Enter your admno:">

    <label for="exam_name">Exam Nmae:</label>
    <input type="exam_name" name="exam_name" placeholder="Enter exam_name:">

    <label for="marks">Student marks:</label>
    <input type="marks" name="marks" placeholder="Enter your marks:">
    <button submit>submit</button>
 
 </form>   



<?php
$servername = "localhost";
$username = "root";
$password = "pakistan";
$dbname = "school";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){

    echo"Connection failed ".mysqli_connect_error();
    exit();
    
        // $sql = "INSERT INTO `examination` (`examid`, `student_name`, `admno`, `exam_name`, `marks`) VALUES (NULL, 'Abdkadri Hussein', 'DCH200/506/2024', 'CAT1', '90')";
        // $result = mysqli_query($conn, $sql);


        if($_SERVER)["REQUEST_METHOD"] = "POST"{
            

    

}








?>








</body>
</html>