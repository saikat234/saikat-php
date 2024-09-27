<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" i
    ntegrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <form action="action.php" method="post" enctype="multipart/form-data">
        Name: <input type="text" name="name"><br>
        Email: <input type="email" name="email"><br>
        Password: <input type="password" name="password"><br>
        Phone: <input type="number" name="phone"><br>
        Gender: <input type="radio" name="gender" value="Male">Male
                <input type="radio" name="gender" value="Female">Female
                <input type="radio" name="gender" value="Transgender">Transgender<br>
        Degree: <select name="degree">
                 <option value="">Select</option>
                 <option value="Btech">Btech</option>
                 <option value="Mtech">Mtech</option>
                 <option value="BCA">BCA</option>
                 <option value="MCA">MCA</option>
                </select><br>
        Language: <input type="checkbox" name="lang[]" value="Bengali">Bengali
                  <input type="checkbox" name="lang[]" value="English">English <br>

        Image: <input type="file" name="image"><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>