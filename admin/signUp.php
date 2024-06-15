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
        .underContainer { display: none; }
        .underContainer.active { display: block; }
    </style>
</head>
<body>

<?php
require '../config/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = htmlspecialchars($_POST['fname']);
    $lname = htmlspecialchars($_POST['lname']);
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];
    $conpwd = $_POST['conpwd'];

    $checkEmail = "SELECT * FROM customer WHERE email='$email'";
    $result = $conn->query($checkEmail);

    if ($result->num_rows > 0) {
        echo "<script>alert('Email Address Already Exists')</script>";
    } else {
        if ($password == $conpwd) {
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO customer (CID, firstName, lastName, email, password) VALUES ('', '$fname', '$lname', '$email', '$passwordHash')";
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
            <h2 style="margin-bottom:30px; font-weight:bold;">Sign up</h2>
            <h4 style="margin:40px 0px 21px 0px;">Enter your email address</h4>
            <input type="email" name="email" required>
            <h5 style="margin-bottom:30px;"><a href="">Already have an account?</a></h5>
            <input type="button" value="Next" id="next" style="border:none; font-weight:bold; width:100px; color:white; margin-left:65%;" class="btn">
        </div>

        <div id="form2" class="underContainer">
            <p style="margin-top:50px;"></p>
            <label for="fname">First Name</label>
            <input type="text" name="fname" required>
            <br>
            <label for="lname">Last Name</label>
            <input type="text" name="lname" required>
            <br>

            <div style = "display:flex; margin-left:25%;">
            <input type="button" value="Back" id="back" style="border:none; font-weight:bold; width:100px; color:white; margin-top:20px;" class="btn">
            <input type="button" value="Next" id="next2" style="border:none; font-weight:bold; width:100px; color:white;margin-top:20px;" class="btn">
            </div>

        </div>

        <div id="form3" class="underContainer">
            <h4 style="margin:40px 0px 21px 0px;">Create a password</h4>
            <input type="password" name="password" required>
            <h4 style="margin:5px 0px 21px 0px;">Confirm your password</h4>
            <input type="password" name="conpwd" required>
            <br>
            <input type="submit" name="add" style="border:none; font-weight:bold; width:100px; color:white; margin-left:65%; margin-bottom:3px; " class="btn" value="Sign Up">
        </div>
    </form>
</div>

<script>
    var form1 = document.getElementById("form1");
    var form2 = document.getElementById("form2");
    var form3 = document.getElementById("form3");

    var next = document.getElementById("next");
    var next2 = document.getElementById("next2");
    var back = document.getElementById("back");

    next.onclick = function() {
        form1.classList.remove("active");
        form2.classList.add("active");
    }
    next2.onclick = function() {
        form2.classList.remove("active");
        form3.classList.add("active");
    }
    back.onclick = function() {
        form2.classList.remove("active");
        form1.classList.add("active");
    }
</script>

</body>
</html>
