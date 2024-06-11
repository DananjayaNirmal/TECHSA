<?php

require '../config/config.php';

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Sign Up</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <script src='main.js'></script>
</head>
<body>

<?php


if(isset($_POST["button"]))

{

    $firstName=$_POST["fname"];
    $lastName=$_POST["lname"];
    $emailAddress=$_POST["email"];
    $telephone=$_POST["phoneNo"];
    $birthDate=$_POST["DOB"];
    $pwd=$_POST["password"];
    $pwdConf=$_POST["passwordCon"];

    
    $checkEmail="SELECT * From customer where email='$emailAddress'";
    $result=$conn->query($checkEmail);
    if($result->num_rows>0){
        echo "<script>alert('Email Address Already Exists!')</script>";
    }
    else {
        if( $pwd == $pwdConf){
            $pwd=password_hash($pwd, PASSWORD_DEFAULT);
            $sql="INSERT INTO customer (firstName, lastName, email, phone, DOB, password) VALUES ('$firstName', '$lastName','$emailAddress','$telephone','$birthDate','$pwd')";
            $result = $conn->query($sql);

            if(!$result){
                echo "<script>alert('something went wrong!')</script>";
                header("location:userprofile.php");
            }
            else{
                echo "<script>alert('Account creation success.')</script>";
                header("location:./Sign Up.php");
            }
            
        }
        else{
            
            echo "<script>alert('Password doesn't match')</script>";
    
            // if($conn->query($sql)==TRUE)
            // {
            // }
            // else{
            //     echo "Error".$conn->error;
            // }
        }
    }
    
   
}
mysqli_close($conn); 

?>

<h2 style="margin-left:55%">Create an account</h2><br>
<div class="container">
        

        <div class="box">
            <form action="" method="post">
                
               
                
                    <label for="fname">First name</label><br>
                    <input type="text" id="fname" name="fname" required><br>
            
                    <label for="lname">Last name</label><br>
                    <input type="text" id="lname" name="lname" required><br>

                    <label for="email">Email address</label><br>
                    <input type="email" id="email" name="email" required><br>
            
                    <label for="phoneNo">Phone number</label><br>
                    <input type="tel" id="phoneNo" name="phoneNo" required><br>
            
                    <label for="DOB">DOB</label><br>
                    <input type="date" id="DOB" name="DOB" required><br>
                
                    <label for="password">Password</label><br>
                    <input type="password" id="password" name="password" required><br>
                
                    <label for="password">Confirm password</label><br>
                    <input type="password" id="password" name="passwordCon" required><br>   
                
            
                <div>
                    <label><input type="checkbox" name="terms" required>Agree to Terms of Service and Privacy Policy</label>

                </div>

                <input type="submit" value="Sign Up" class="btn" name="button"></button>

            <div>
                Already have an account? <a href="../user profile/Login.php">Sign in</a>
            </div>
            </form>
        </div>    
            
        </div>  
</body>
</html>














