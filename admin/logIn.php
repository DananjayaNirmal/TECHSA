
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

    <link rel="stylesheet" href="font_res.css">

</head>
<body>

<?php


require '../config/config.php';

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
            $sql = "INSERT INTO customer(CID, email, password) VALUES('','$email','$password')" ; 
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
<form>
<div class="container">
 
<div>
<img src="../images/T.png" style="width:80px; position:absolute; left:500px; bottom:490px;">
</div>
     <div id="form1" class="underContainer">
        <h2 style="margin-bottom:30px; font-weight:bold;">Log in</h2>
        <h4 style="margin:40px 0px 21px 0px;">Enter your email address</h4>
      <input type="email" name = "email" placeholder="someone@example.com">
      <h5 style="margin-bottom:30px;"><a href="">create a new account?</a></h5>
      <h5 style="margin-bottom:30px;"><a href="">Staff log in</a></h5>
      
      <input type="submit" value="Next" id="next" style="border:none; font-weight:bold; width:100px; color:white;" class = "btn">
     </div>

    

      <div class="underContainer">
      <h4 style="margin:40px 0px 21px 0px;">Enter your password</h4>
      <input type="password" name = "password">
       

      <!--input type="submit" value="Next" id="sub4" style="border:none; font-weight:bold; width:100px; color:white;" class = "btn"-->
      <input type="submit" name="sbmt" id="sub" style="border:none; font-weight:bold; width:100px; color:white;" class = "btn">
      </div>
    

</div>
<form> 
 
 

 
    
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
 
</body>
</html>




 

 
  




 