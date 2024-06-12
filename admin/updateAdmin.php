<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Techsa</title>
    <link rel="stylesheet" href="font_res2.css">
</head>
<body>
<?php
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
?>

<h2 style="margin:auto;">Edit Admin Details</h2>
<div class="maincontainer">
    <div style="background:transparent;" class="container">
        <form method="POST">
            <h2>Basic Information</h2>
            <div class="ipt">
                <label for="name">Full Name:</label>
                <input type="text" name="name">
                <label for="email">E-mail:</label>
                <input type="text" name="email">
                <label for="password">Password:</label>
                <input type="password" name="pwd">     
            </div>
        </div>
        <div style="background:transparent; margin-top:140px;" class="container">
            <h2>Address Details</h2>
            <div class="ipt">
                <label for="lane">Lane:</label>
                <input type="text" name="lane">
                <label for="street">Street:</label>
                <input type="text" name="street">
                <label for="city">City:</label>
                <input type="text" name="city">
            </div>
            <input type="submit" name="update" value="Update" style="width:107%; background-color:blue; border:none; height:30px; margin-bottom:5px;">
        </form>
    </div> 
</div>
<a href="admin.php"><img src="../images/logout.png" style="width:30px; margin:10px;"></a>
</body>
</html>
