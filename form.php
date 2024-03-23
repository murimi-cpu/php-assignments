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
    
  <form action="personnel.php" method ="post">
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

    <label for="country">Country</label>
    <input type="text" name="country" placeholder="Enter your Country:">

      <button type="submit">Submit</button>
</pre>
  </form>


  <style>

</style>
<center><h2>FETCH DATA FROM DATABASE      [PERSONNEL.PHP FILE]         USING PHP</h2></center>

<!-- Fetching code starts here -->

<table>
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Contact</th>
    <th>Address</th>
    <th>Profession</th>
    <th>Country</th>
    <th>Update</th>
    <th>Delete</th>
  </tr>
  
  <tr>
    <td>Hussein Abdi</td>
    <td>hussein@gmail.com</td>
    <td>+234725945079</td>
    <td>6309-00400</td>
    <td>Software Engineer</td>
    <td>Pakistan</td>
    <td><button>update</button color #dddddd></td>
    <td><button>Delete</button color #02B00></td>
  </tr>
  <tr>
  <td>Kim c.</td>
    <td>m@gmail.com</td>
    <td>+25472000000</td>
    <td>613-40400</td>
    <td>Lecturer</td>
    <td>New Berlin, WI 53151</td>
    <td><button>update</button color #dddddd></td>
    <td><button>Delete</button color #02B00></td>
  <tr>
  <td>Donna P. German</td>
    <td>murimi@gmail.com</td>
    <td>+254725945079</td>
    <td>357 Joseph Street</td>
    <td>Pilot</td>
    <td>Austria</td>
    <td><a href=""></a><button>update</button color #dddddd></td>
    <td><button color #02B00>Delete</button></td>
  </tr>
  <tr>
  <td>Murimi James</td>
    <td>murimi@gmail.com</td>
    <td>+254725945079</td>
    <td>63-40400</td>
    <td>Software Developer</td>
    <td>UK</td>
    <td><a href="#">Update</td>
    <td><a href="#">Delete</a></td>
  </tr>
  <tr>
  <td>Clara P. Harbison</td>
    <td>murimi@gmail.com</td>
    <td>+254725945079</td>
    <td>434 Murphy Court</td>
    <td>Software Developer</td>
    <td>Canada</td>
    <td><a href="#">Update</td>
    <td><a href="#">Delete</a></td>
  </tr>
  <tr>
  <td>Levi O.M</td>
    <td>l@gmail.com</td>
    <td>+254725945079</td>
    <td>630-40400</td>
    <td>Software Developer</td>
    <td>Italy</td>
    <td><a href="#">Update</td>
    <td><a href="#">Delete</a></td>
  </tr>


  
</body>



</html>

<!DOCTYPE html>
<html>
<head>

</head>
<body>



</body>
</html>

