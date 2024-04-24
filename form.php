<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personnel Form</title>
    <link rel="stylesheet" href="main.css">

</head>

<body>
    <pre>
   <div class="form">
   <form action="form.php" method ="post">
    <label for="full_name">fullname</label>
    <input type="name" name="full_name" placeholder="Enter Full Name">

    <label for="email">email</label>
    <input type="email" name = "email" placeholder="Enter your Email">

    <label for="phone">phone</label>
    <input type="number" name = "phone" placeholder="Enter you phone:">

    <label for="address">address</label>
    <input type="text" name="address" placeholder="Enter your address:">

    <label for="profession">Profession:</label>
      <select  type="text" name="profession">
          <option value="profession">---Select---</option>
          <option value="Software Engineer">Software Engineer</option>
          <option value="Lecturer">Lecturer</option>
          <option value=" Pilot">Pilot</option>
          <option value=" Software Developer"> Software Developer</option>
    </select>

    <label for="city">City</label>
    <input type="text" name="city" placeholder="Enter your city:">

    <label for="country">Country</label>
    <input type="text" name="country" placeholder="Enter your Country:">

      <button type="submit">Submit</button>
</pre>
    </form>
    </div>


    <h2>FETCH DATA FROM DATABASE(SCHOOL) PERSONNEL.PHP FILE USING PHP</h2>

    <!-- Fetching code starts here -->

    <?php
include "connection.php";
if( $_SERVER["REQUEST_METHOD"] == "POST" )

$full_name = htmlspecialchars($_POST["full_name"]);
$email = htmlspecialchars($_POST["email"]);
$phone = htmlspecialchars($_POST["phone"]);
$address = htmlspecialchars($_POST["address"]);
$profession = htmlspecialchars($_POST["profession"]);
$city = htmlspecialchars($_POST["city"]);
$country = htmlspecialchars($_POST["country"]);

$sql= "INSERT INTO `tbluser` (`full_name`, `email`, `phone`, `address`, `profession`,`city`, `country`) VALUES ('$full_name', '$email', '$phone', '$address', '$profession', '$city', '$country')";
$result = mysqli_query($conn,$sql);
if($result){
    
  echo "<script>alert('Data inserted Successfully!');</script>";

}
else{

    echo "Data Not Inserted Successfully".mysqli_error($conn);
}

  $query = "SELECT * FROM `tbluser`";
  $result2 = mysqli_query($conn,$query);
  // print_r($result2);
  // var_dump($result2);
  if($result2)
  {
    echo '

  <table class="table caption-top">
  <thead>
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Contact</th>
    <th>Address</th>
    <th>Profession</th>
    <th>city</th>
    <th>Country</th>
    <th>Update</th>
    <th>Delete</th>
  </tr>
</thead>
<tbody>
';   


while( $row =mysqli_fetch_assoc($result2)){

  echo '<tr>
    <td>'.$row['full_name'].'</td>
    <td>'.$row['email'].'</td>
    <td>'.$row['phone'].'</td>
    <td>'.$row['address'].'</td>
    <td>'.$row['profession'].'</td>
    <td>'.$row['city'].'</td>
    <td>'.$row['country'].'</td>
    <td><a href="update.php?userid='.$row['userid'].'"><button>Update</button></a></td>
    <td><a href="delete.php?del='.$row['userid'].'"><button>Delete</button></a></td>
  </tr>';
}
  }

?>
    </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>
</html>
