
 <?php

include "connection.php";

$userid =$_GET['userid'];

// we have to fetch data from database  input html tag for update
$sql3 = "SELECT * FROM `tbluser` WHERE `userid`= $userid";
$result3 = mysqli_query($conn, $sql3);
$data = mysqli_fetch_array($result3);



echo' <pre>
<div class="form">
   <form action="update_insert.php?dataupdate='.$userid.'" method ="post">
    <label for="full_name">fullname</label>
    <input type="name" name="full_name" value="'.$data['full_name'].'" placeholder="Enter Full Name">

    <label for="email">email</label>
    <input type="email" name = "email"value="'.$data['email'].'"  placeholder="Enter your Email">

    <label for="phone">phone</label>
    <input type="number" name = "phone" value="'.$data['phone'].'" placeholder="Enter you phone:">

    <label for="address">address</label>
    <input type="text" name="address" value="'.$data['address'].'" placeholder="Enter your address:">

    <label for="profession">Profession:</label>
      <select  type="text" name="profession">
          <option value="profession">---Select---</option>
          <option value="Software Engineer">Software Engineer</option>
          <option value="Lecturer">Lecturer</option>
          <option value=" Pilot">Pilot</option>
          <option value=" Software Developer"> Software Developer</option>
    </select>

    <label for="city">City</label>
    <input type="text" name="city" value="'.$data['city'].'" placeholder="Enter your city:">

    <label for="country">Country</label>
    <input type="text" name="country" value="'.$data['country'].'" placeholder="Enter your Country:">

      <button type="submit">Submit</button>
</pre>
    </form
';



