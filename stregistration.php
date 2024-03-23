<?php
$servername = "localhost";
$username = "root";
$password = "";

$database = "school";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){

    echo "You are not connected Successfully".mysqli_connect_error();
}
else{
        // use superglobal variable to check request method and allow code to run if true
    if( $_SERVER["REQUEST_METHOD"] == "POST" )
        // sanitinze the input to avoid crossscripting injections for security
        $student_name = $_POST["student_name"];
        $email = $_POST["email"];
        $student_telno = $_POST["student_telno"];
        $regdate = $_POST["regdate"];
        $county = $_POST["county"];
        $id_birth = $_POST["id_birth"];
        // $dob = $_POST["dob"];
        $course = $_POST["course"];
        $level = $_POST["level"];
        $modeofstudy = $_POST["modeofstudy"];
        $grade = $_POST["grade"];
        $fee = $_POST["fee"];
        $campus = $_POST["campus"];
       




        // insert date into tbluser
        $sql = "INSERT INTO `tblstudents` (`student_name`, `email`, `student_telno`, `regdate`, `county`, `id_birth`, `dob`, `course`, `level`, `modeofstudy`, `grade`, `fee`, `campus`) VALUES ('$student_name', ' $email', '$student_telno', '$regdate', ' $county', '$id_birth', ' $course', '$level', '$modeofstudy', ' $grade', '$fee ',' $campus')";

        if($result){

            echo "Data inserted Successfully:";
        }
        else{

            echo "Data Not Inserted Successfully".mysqli_connect_error();
        }
}





