<?php

$username ="";
$email="";
$password="";
$errors=array();

$db = mysqli_connect('localhost','root','','login-register');

if(isset($_POST['register'])){
    $username=mysqli_real_escape_string($db, $_POST['username']);
    $email=mysqli_real_escape_string($db, $_POST['email']);
    $password=mysqli_real_escape_string($db, $_POST['password']);
    $confirmpassword=mysqli_real_escape_string($db, $_POST['confirmpassword']);



    if(empty($username)) {array_push($errors,"Username is required");}
    if(empty($email)) {array_push($errors,"Email is required");}
    if(empty($password)) {array_push($errors,"Password is required");}
    if(empty($confirmpassword)) {array_push($errors,"confirm password is requried");}
    if ($password!= $confirmpassword) {
        array_push($errors, "The two passwords do not match");
    }
      $register_check_query = "SELECT * FROM register WHERE username='$username' OR email='$email' LIMIT 1";
      $result = mysqli_query($db, $register_check_query);
      $register = mysqli_fetch_assoc($result);
      
    if ($register) {
        if ($register['username'] === $username) {
          array_push($errors, "Username already exists");
        }
    
        if ($register['email'] === $email) {
          array_push($errors, "email already exists");
        }
    }
    if (count($errors) > 0){
        foreach ($errors as $error){
            echo "<div class ='alert alert-danger'>$error</div>";
        }
    }
    else{
        if (count($errors) == 0) {
            $password = md5($password);//encrypt the password before saving in the database
      
            $query = "INSERT INTO register (username, email, password) 
                      VALUES('$username', '$email', '$password')";
            mysqli_query($db, $query);
            
            header('location: login.php');
        }
    }
}

if(isset($_POST['login'])){
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if(empty($email))
    {
        array_push($errors,"Email is required");
    }
    if(empty($password)){
        array_push($errors,"Password is required");
    }
    if (count($errors) == 0) {
            $password = md5($password);
            $query = "SELECT * FROM register WHERE email='$email' AND password='$password'";
            $results = mysqli_query($db, $query);
            if (mysqli_num_rows($results) == 1) {
              $_SESSION['email'] = $email;
              $_SESSION['success'] = "You are now logged in";
              header('location: Main Flow/index.html');
            } 
            // else {
            //     array_push($errors, "Wrong username/password combination");
            // }
        }
            if (count($errors) > 0){
                foreach ($errors as $error){
                    echo "<div class ='alert alert-danger'>$error</div>";
                }
            }
}



?>