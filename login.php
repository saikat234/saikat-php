<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="loginaction.php" method="post">
        <label for="Email">Email</label>
        <input type="email" name="email" placeholder="Email"><br>

        <label for="Password">Password</label>
        <input type="password" name="password" placeholder="password"><br>

        <button type="submit" name="submit" value="login">Submit</button>
        <a href="form.php">New Registration</a>
    </form>
</body>
</html>