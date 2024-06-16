<!DOCTYPE html>
<html>
<head>
    <title>Online Customer support</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            background:linear-gradient(to right,#F5F6F7,#F5F6F7)
        }
        </style>
</head>
 <body>
<div style = "background-color:#fff; width:70%; margin:70px; height:100%; box-shadow:10px;">
    <div style = "margin-left:50px;">
    
<div>
    <form method = "POST">
        <h3 style = "background-color:blue; margin-left:-50px; padding-left:50px;">Update User details</h3>
        <br>
        Enter your e-mail address
        </br></br>
        <input type = "email" value = "someone@service.com" name = "email" style = "margin-bottom:50px;">
        <br>
        
        <div style = "display:flex;"> 
        First Name:
        </br>
        <input type = "text"  name = "fname" style = "margin-right:50px;">

        Last Name:
        </br>
        <input type = "text" name = "lname">
        </div>
        <br>


        <div style = "display:flex; margin-top:50px; width:100%; height:20px;">  
        Phone No:
        </br>
        <input type = "phone" name = "phone" style = "margin-right:50px;">

        Date Of Birth:
        </br>
        <input type = "date" name = "dob">
        </div>
        </br>
        <h3 style = "margin-left:-50px; padding-left:50px; background-color:blue;">Update password</h3>
        
        <br>
        <div style = "display:flex;">
            <input type = "password" name = "cpwd" placeholder = "current password" style = "margin-right:100px;">
            <input type = "password" name = "npwd" placeholder = "new password">
        </div>

        <br>
        <h3 style = "margin-left:-50px; padding-left:50px; background-color:blue;">Update Address Details</h3>
        <br>
         
        <input type = "text" name = "lane" placeholder = "lane" style ="margin-bottom:20px;">
        </br>
        <input type = "text" name = "street" placeholder = "street" style ="margin-bottom:20px;">
        </br>
        <input type = "text" name = "city" placeholder = "city" style ="margin-bottom:20px;">
        </br>
        <input type = "text" name = "zip" placeholder = "postal  code" style ="margin-bottom:20px;">
       
        </br>
</form>
</div>
</div>
</div>

</body>
</html>