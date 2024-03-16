<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Password</title>
</head>
<body>
<pre>
<form action="confirmpassword.php" method = "post">

    <label for="user_name">Username:</label>
    <input type="user_name" name="user_name" placeholder="Enter your username:">

    <label for="password">Password:</label>
    <input type="password" name="password" placeholder="Enter your password:">

    <label for="confirm_password">Confirm Password:</label>
    <input type="confirm_password" name="confirm_password" placeholder="confirm_password:">

    <button submit>submit</button>
 
 </form>   

</pre>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "school";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn) {

        echo"Connection failed ".mysqli_connect_error();
        exit();
    } 

    else{ 
        
        if(($_SERVER)['REQUEST_METHOD'] == 'POST'){
        
        
            $user_name = $_POST["user_name"];
            $user_password = $_POST["password"];
            $confirm_password = $_POST["confirm_password"];

            if($confirm_password == $password){
                $sql = "INSERT INTO `users` (`user_name`, `user_password`, `confirm_password`) VALUES ('$user_name', '$user_password', 'confirm_password')";
                $result = mysqli_query($conn, $sql);
                if($result){
                    echo "<script>alert('Data Inserted  Successfully');</script>";

            }
            else{

                echo "<script>alert('Data NOT Inserted  Successfully');</script>";


                }
        
            



            }


    }

        
        


?>

