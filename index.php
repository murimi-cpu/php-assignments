<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment form to insert data into database</title>
</head>
<body>
    <pre>
    <form action="frminsert.php" method ="POST">
        <label for="text">Parent Name</label>
        <input type="name" name= parent_name placeholder="Enter your parent name">

        <label for="email">Email</label>
        <input type="email" name= email placeholder="Enter your parent email">

        <label for="passord">Password</label>
        <input type="passord" name= password placeholder="Enter your password">
        
        <label for="city">City</label>
        <input type="city" name= city placeholder="Enter your City">

        <label for="county">County</label>
        <input type="county" name= county placeholder="Enter your County">

        <label for="country">Country</label>
        <input type="country" name= country placeholder="Enter your Country">
        
        <button type="submit">submit</button>

    </form>
</pre>
</body>
</html>