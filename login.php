<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
    <title>Login</title>
</head>
<body>
<div class="container">
        <h1>Login</h1>
        <form action="login.php" method="post">
        <?php include('server.php')?>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="form-btn">
                <button type="submit" class="btn btn-primary" name="login">Login</button>
            </div>
            <p>
                Not yet a member? <a href="register.php">Register</a>
            </p>
</form>
</div>
    
</body>
</html>