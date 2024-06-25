<!DOCTYPE html>
<html>
<head>
    <title>Online Customer support</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            background:linear-gradient(to right,#F5F6F7,#F5F6F7)
        }

        form input 
        {
            outline :none;
        }
        </style>
</head>
 <body>

 <div>
    <img src="../images/tnb.png" style = "width:100px;">
</div>

<div style = "background-color:#fff; width:70%; margin:0px 0px 0px 100px; height:100%; box-shadow:10px;">
    <div style = "margin-left:50px;">
    
<div>
    <form method = "POST">
        <h3 style = "background-color:#A9A9A9; margin-left:-50px; padding-left:50px;">Update Admin details</h3>
        <br>
        Enter the e-mail address
        </br></br>
        <input type = "email" value = "someone@service.com" name = "email" style = "margin-bottom:50px;">
        <br>
        
        <div style = "display:flex;"> 
    <div>
        First Name:
        </br>
        <input type = "text"  name = "fname" style = "margin-right:50px;">
    </div>
    <div>
        Last Name:
        </br>
        <input type = "text" name = "lname">
    </div>
        </div>
        <br>


        <div style = "display:flex; margin-top:50px; width:100%; height:20px;">  
    <div>        
        Phone No:
        </br>
        <input type = "phone" name = "phone" style = "margin-right:50px;">
    </div>
    <div>
        Date Of Birth:
        </br>
        <input type = "date" name = "dob">
    </div>    
        </div>
        </br>
        <h3 style = "margin-left:-50px; padding-left:50px; background-color:#A9A9A9;">Update password</h3>
        
        <br>
        <div style = "display:flex;">
            <input type = "password" name = "cpwd" placeholder = "current password" style = "margin-right:100px;">
            <input type = "password" name = "npwd" placeholder = "new password">
        </div>
        <br><br>

        <input type = "submit" name = "sub" placeholder = "Add" style ="margin-bottom:20px; border:none; background-color:green; padding:5px 10px 5px 10px; border-radius:2px;">

        </form>

        <h3 style = "margin-left:-50px; padding-left:50px; background-color:#A9A9A9;">add a new admin</h3>
        <br>
    <!------------------------------------------------->
        <form method = "POST">
        <input type = "email" name = "email" placeholder = "Enter the E-mail Address" style ="margin-bottom:20px;">
        </br>
        <input type = "text" name = "aid" placeholder = "Give a agent ID" style ="margin-bottom:20px;">
        </br>
        <input type = "password" name = "password" placeholder = "Create a password" style ="margin-bottom:20px;">
        </br>

        <input type = "submit" name = "sub" placeholder = "Add" style ="margin-bottom:20px; border:none; background-color:green; padding:5px 10px 5px 10px; border-radius:2px;">

</div>
</div>
</div>

</body>
</html>


<!--?php
require '../config/config.php';

if(isset($_POST['update'])) {
     
    if(isset($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['pwd'], $_POST['lane'], $_POST['street'], $_POST['city'])) {
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $lane = $_POST['lane'];
        $street = $_POST['street'];
        $city = $_POST['city'];

        $password = password_hash($_POST['pwd'], PASSWORD_DEFAULT);  

        $sql = "UPDATE admin SET fullName=?, email=?, phoneNo=?, password=?, lane=?, street=?, city=? WHERE email=?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ssisssss", $name, $email, $phone, $password, $lane, $street, $city, $email);
        if(mysqli_stmt_execute($stmt)) {
            echo "<script>alert('Successfully updated');</script>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "Error: All fields are required.";
    }
}
mysqli_close($conn);
?-->
