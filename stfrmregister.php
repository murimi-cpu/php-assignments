<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Registration Form</title>
</head>
<body>
  <pre>
  <form action="stregistration.php" method ="post">

    <label for="fullname">fullname</label>
    <input type="name" name="student_name" placeholder="Enter Full Name">

    <label for="email">email</label>
    <input type="email" name = "email" placeholder="Enter your Email">

    <label for="phone">phone:</label>
    <input type="number" name = "student_telno" placeholder="Enter you phone:">

    <label for="address">Registration Date:</label>
    <input type="date" name="regdate" placeholder="Enter your regdate:">

    <label for="address">County:</label>
    <input type="text" name="county" placeholder="Enter your County:">

    <label for="address">ID|Birth Cert|Passport</label>
    <input type="timestamp" name="id_birth" placeholder=" Enter your ID|Birth Cert|Passport :">

    <label for="address">Course:</label>
    <input type="select" name="course" placeholder="Enter your Course:">

    <label for="address">level</label>
    <input type="enum" name="level" placeholder="Enter Level:">

    <label for="address">Mode of Study</label>
    <input type="enum" name=" 	modeofstudy" placeholder="Enter mode of study:">

    <label for="address">Grade</label>
    <input type="text" name="grade " placeholder="Enter your Grade:">

    <label for="address">Payment Plan:</label>
    <input type="enum" name="fee" placeholder="Enter payment plan:">
    
    <label for="address">Choose Campus:</label>
    <input type="enum" name="campus" placeholder="Choose Campus:">

<button type="submit">Submit</button>
</pre>
  </form>
</body>
</html>


