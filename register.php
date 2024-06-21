<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
    <title>Register</title>
</head>
<body>
<div class="container">
        <h1>Register</h1>
        <form action="register.php" method="post">
            <?php include('server.php')?>
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="username">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="form-group">
                <label>ConfirmPassword</label>
                <input type="password" class="form-control" name="confirmpassword">
            </div>
            <div class="form-btn">
                <button type="submit" class="btn btn-primary" name="register">Register</button>
            </div>
            <p>
              Already a member? <a href="login.php">Sign in</a>
            </p>
        </form>
        </div>
</body>
</html>