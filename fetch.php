<!-- <?php
$servername = "localhost";
$username ="root";
$password = "";
$database = "school";

$conn =mysqli_connect($servername, $username, $password, $database);

//Connection 
if($conn){
    $sql = "SELECT * FROM `tblstudents` ORDER BY `tblstudents`.`stid` = 1 ";
    $result = mysqli_query($conn, $sql);
    $row=mysqli_fetch_row($result);
    foreach($data as $row) 
    {
        echo "student_name: "  . $data." , ";
}}
else{
    echo"connection failed". mysqli_connect_error();
}


// mysqli_close($conn); -->

$b = 
[
    1 => ['name'=>'hassan','class'=>'6','age'=>'56'],
    2 => ['name'=>'hassan','class'=>'6','age'=>'56'],
    3 => ['name'=>'hassan','class'=>'6','age'=>'56']
];


foreach ($b as $id => $value) {
    echo $id.'Name :'.$value['name'];
}


echo "hello";

?>
