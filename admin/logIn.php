<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Techsa</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="font_res.css">
    
    <style>
        .underContainer {
            display: none;
        }
        .underContainer.active {
            display: block;
        }
    </style>
</head>
<body>

<?php
require '../config/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['pwd'];
     

    $checkEmail = "SELECT * FROM admin WHERE email='$email'";
    $result = $conn->query($checkEmail);

    if ($result->num_rows > 0) {
        echo "<script>alert('Email Address Already Exists')</script>";
    } else {
        if ($password == $conpwd) {
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO customer (CID, email, password) VALUES (NULL, '$email', '$passwordHash')";
            $result = $conn->query($sql);

            if (!$result) {
                echo "<script>alert('Something went wrong!')</script>";
            } else {
                echo "<script>alert('Account creation success.')</script>";
            }
        } else {
            echo "<script>alert('Passwords do not match')</script>";
        }
    }
}
?>

<div class="container">
    <div>
        <img src="../images/T.png" style="width:80px; position:absolute; left:500px; bottom:490px;">
    </div>
    <form method="POST" action="">
        <div id="form1" class="underContainer active">
            <h2 style="margin-bottom:30px; font-weight:bold;">Log in</h2>
            <h4 style="margin:40px 0px 21px 0px;">Enter your email address</h4>
            <input type="email" name="email" placeholder="someone@example.com" required>
            <h5 style="margin-bottom:30px;"><a href="">Staff log in</a></h5>
            <h5 style="margin-bottom:30px;"><a href="signUp.php">Create a new account?</a></h5>
            <input type="button" value="Next" id="next" style="border:none; font-weight:bold; width:100px; color:white; margin-left:65%;" class="btn">
        </div>

        <div id="form2" class="underContainer">
            <h4 style="margin:40px 0px 21px 0px;">Enter your password</h4>
            <input type="password" name="pwd" required>
            <div style = "margin-left:25%;">

            <h5 style="margin-bottom:30px; margin-left:-80px;"><a href="">Forgot password?</a></h5>
            <h5 style="margin-bottom:30px; margin-left:-80px;"><a href="">Create a new account?</a></h5>

            <input type="button" value="Back" id="back" style="border:none; font-weight:bold; width:100px; color:white; margin-bottom:55px;" class="btn">
            <input type="submit" name="add" style="border:none; font-weight:bold; width:100px; color:white;" class="btn" value="Log in">
        </div>
    </form>
</div>

<script>
    var form1 = document.getElementById("form1");
    var form2 = document.getElementById("form2");

    var next = document.getElementById("next");
    var back = document.getElementById("back");

    next.onclick = function() {
        form1.classList.remove("active");
        form2.classList.add("active");
    }

    back.onclick = function() {
        form2.classList.remove("active");
        form1.classList.add("active");
    }
</script>

</body>
</html>
