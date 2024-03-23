<?php
include "connection.php";

        // posted from form.php file
        // use superglobal variable to check request method and allow code to run if true
    if( $_SERVER["REQUEST_METHOD"] == "POST" )
        // sanitinze the input to avoid crossscripting injections for security
        $full_name = htmlspecialchars($_POST["full_name"]) ;
        $email = htmlspecialchars($_POST["email"]);
        $phone= htmlspecialchars($_POST["phone"]);
        $address = htmlspecialchars($_POST["address"]); 
        $profession = htmlspecialchars($_POST["profession"]);
        $country =  htmlspecialchars($_POST["country"]);

        // insert date into tbluser
        $sql = "INSERT INTO `tbluser` (`full_name`, `email`, `phone`, `address`, `profession`, `country`) VALUES ('$full_name', '$email', '$phone', '$address',' $profession,'$country')";
        $result = mysqli_query($conn,$sql);

        if($result){
            $query = "SELECT * FROM tbluser";
            $data = mysqli_query($conn,$query);
            $result3 = mysqli_num_rows($data);
            if($result3){
            while($row = mysqli_fetch_array($data)){
               
              }
            }
              
            
        }
        else{

            echo "Data Not Inserted Successfully".mysqli_connect_error();
        }

