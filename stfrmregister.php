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

    <label for="course">Course:</label>
<select name="course" id="course">
  <option value="">Select Course</option>
  <option value="Information Technology">Information Technology</option>
  <option value="Computer Science">Computer Science</option>
  <option value="Community Health">Community Health</option>
  <option value="Social Work">Social Work</option>
  <option value="Secretarial Studies">Secretarial Studies</option>
  <option value="Fashion Design & Tailoring">Fashion Design & Tailoring</option>
  <option value="Beauty therapy">Beauty therapy</option>
  <option value="Cosmethology">Cosmethology</option>
  <option value="Electrical Installation Power Option">Electrical Installation Power Option</option>
  <option value="Welding & Fabrication">Welding & Fabrication</option>
  <option value="Introduction to Artificial Intelligence (AI)">Introduction to Artificial Intelligence (AI)</option>
  <option value="Data Science">Data Science</option>
  <option value="Accountance">Accountance</option>
</select>

    <label for="level">level</label>
<select name="level" id="level">
  <option value="level">Please choose Level</option>
  <option value="Diploma">Diploma</option>
  <option value="Certificate">Certificate</option>
  <option value="Artisan Certificate">Artisan Certificate</option>
  <option value="RPL">RPL</option>

</select>

    <label for="Grade">Grade</label>
    <input type="text" name="grade " placeholder="Enter your Grade:">

    <label for="address">Payment Plan:</label>
    <input type="enum" name="fee" placeholder="Enter payment plan:">
    
    <label for="address">Choose Campus:</label>
    <input type="enum" name="campus" placeholder="Choose Campus:">
    <input select>

<button type="submit">Submit</button>
</pre>
  </form>
</body>
</html>


