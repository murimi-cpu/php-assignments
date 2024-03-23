<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <pre>
    
  <form action="register.php" method ="post">
    <label for="fullname">fullname</label>
    <input type="name" name="fullname" placeholder="Enter Full Name">

    <label for="email">email</label>
    <input type="email" name = "email" placeholder="Enter your Email">

    <label for="phone">phone</label>
    <input type="number" name = "phone" placeholder="Enter you phone:">

    <label for="address">address</label>
    <input type="text" name="address" placeholder="Enter your address:">

    <label for="profession">Profession:</label>
    <input type="text">
   <select name="profession" id="profession">Select Country
          <option value="profession">---Select---</option>
          <option value="Software Engineer">Software Engineer</option>
          <option value="Lecturer">Lecturer</option>
          <option value=" Pilot">Pilot</option>
          <option value=" Software Developer"> Software Developer</option>
   </select>
    <label for="country">Country</label>
    <input type="text" name="country" placeholder="Enter your Country:">

    <label for="password">password</label>
    <input type="password" name="password" placeholder="Enter your password:">


<button type="submit">Submit</button>
</pre>
  </form>


  <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  color: black;
  
}


a {
  color: green;
  text-decoration: none;
}


th{
 background-color: #04AA6D;
color: white;


}
td, th {
  border: 1px solid black;
  text-align: left;
  padding: 2px;
  
}
tr:hover {background-color: yellow;}
/* tr:nth-child(even) { */
  /* background-color: #dddddd; */

  /* tr:nth-child(even){background-color: #f2f2f2;} */
/* } */
</style>

<div><h2>FETCH DATA FROM DATABASE USING PHP</h2></div>
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
</table>
</body>



</html>

<!DOCTYPE html>
<html>
<head>

</head>
<body>



</body>
</html>

