<?php
$servername = "localhost";
$username ="root";
$password = "";
$database = "school";

$conn =mysqli_connect($servername, $username, $password, $database);
if($conn){
    $sql = "SELECT * FROM `tblstudents` ORDER BY `tblstudents`.`stid` = 1 ";
    $result = mysqli_query($conn, $sql);

    while ($row=mysqli_fetch_row($result)) 
    {
    echo "tblestudents : ". $row[1]." , ";
}echo"connection failed". mysqli_connect_error();

}
mysqli_close($conn);





?>