
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Techsa</title>

    <!--link rel="stylesheet"  href="style.css">

    <script src="../js/add_del_user.js"></script>

    <link rel="stylesheet" href="style.css"-->
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="admin/font_res.css">

</head>
<body>

<?php


require 'config/config.php';

if(isset($_POST['add']))
{
    $email = $_POST['email']; 
    $password = $_POST['pwd'];
    $conpwd =$_POST['conpwd'];

    $checkEmail="SELECT * From admin where email='$email'";

    $result=$conn->query($checkEmail);

    if($result->num_rows>0){

        echo "<Script>alert('Email Address Already Exists')</script>";
    }
    else {
        if( $password == $conpwd){
            $password=password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO admin(AID, email, password) VALUES('','$email','$password')" ; 
            $result = $conn->query($sql);

            if(!$result){
                echo "<script>alert('something went wrong!')</script>";
            }
            else{
                echo "<script>alert('Account creation success.')</script>";
            }
            // echo "Password does match";
        }
        else{
            
            echo "Password doesn't match";
    
            if($conn->query($sql)==TRUE)
            {
                echo "header('location:add_delete_admin.php')";
            }
            else{
                echo "Error".$conn->error;
            }
        }
    }
    
}

?>

<form id="form1" method="POST">
<container class="maincontainer">
<div class="">
    <h2>Sign in</h2>
    <input type="email" name="email">
    <br>
    <input type="submit" name="next" value="next">
    <h4>No account?<a href="  ">Create one</a></h4>
    

</div>

<div>
    <h1>
     
    </container>
    </form>
    
    <script>

        var form1 = document.getElementById("form1");
        
        var form2 = document.getElementById("form2");
    
    
        var next = document.getElementById("next");
        
        var back = document.getElementById("back");
    
    
       next.onclick=function(){
        form1.style.left="-450px";
        form2.style.left="40px";
       }
       back.onclick=function(){
        form1.style.left="40px";
        form2.style.left="450px";
       }
    
        </script>
 
</div><!--------------------------------------------->
<!--a href="admin.php"><img src="../images/logout.png" style="width:30px; margin:10px;"></a-->
</body>
</html>




 

 
  




 