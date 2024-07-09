<?php

require 'config/config.php';

if(isset($_POST["submit"]))
{
    if(empty($_POST["email"]) || empty($_POST["password"]))
    {
        echo '<script> alert("Both fields are required")</script>';

    }
    else
    {
        $username = mysqli_real_escape_string($conn, $_POST["email"]);
        $result = mysqli_real_escape_string($conn, $_POST["password"]);
        $query = "SELECT * FROM customer where email = 'email'";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result)>0)
        {
            while($row = mysqli_fetch_array($result))
            {
                if (password_verify($password, $row["password"]))
                {
                    $_SESSION["email"] = $email;
                    header("location:entry.php");

                }
                else
                {
                    echo '<script>alert ("wrong user details")</script>';
                }
            }
        }
        else
        {
            echo '<script>alert("Wrong user details")</script>';
        }

    }
   
}

?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name="viewport" content="width=device-width" initial-scale="1.0">
    <link rel="stylesheet" type='text/css' media='screen' href="ulogin.css">
    <link rel="stylesheet" href="header_footer.css">

    <title>Customer Login</title>

    <section class="sect">
      
        <nav>
            <a href="../index.php"><img src="logo.png" class="logo"></a>
            <div class="navbar">
                <ul>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="../FAQ.html">FAQ</a></li> 
                    <li><a href="../index.php">Contact</a></li>
                    <li><a href="About us.php">About</a></li>
                </ul> 
            </div>   
        </nav>    

</head>

<body>

    
    <div class="container">

        <div class="log">

            <form action="" method="post">
                <h2> Login </h2>

                <label for="email"> Username</label><br>
                <input type="email" id="email" name="email" required>
    
                <label for="Password">Password</label><br>
                <input type="password" id="password" name="password" required>

            <button type="submit" class="button" name="submit">Login</button>

            </form> 


        </div>

        <div class="cAccount">
            Don't have an account? <a href="Sign Up.html">Sign Up</a>
        </div>

    </div>

    </section>
    <div style="position: absolute;width:100%; top: 100%;">
    <footer>
    
        <div class="ftr">
            <div class="ftr_2">
                <a href="#" ><img src="logo.png" alt="LOGO"></a>
                <!--p style="margin-bottom:15px; margin-left:50px; text-align:center;">We are providing high quality </br>customer service<br>Signup and make a inquiry</p>
                <p style="font-weight:bold; margin-right:50px;">techsasupport@gmail.com</p-->
            </div>
    
            <div class="quick_links">
                 
                <h2 style="margin-bottom:25px; margin-top:20px;">Links</h3>
                <ul>
                <li><a href="#">Home</a></li>
                <li><a href="../FAQ.html">FAQ</a></li> 
                <li><a href="../index.php">Contact</a></li>
                <li><a href="About us.php">About</a></li>
                </ul>
            </div>
    
            <div class="social_media">
                <h2 style="margin-top:20px; margin-left:15px;">Follow Us</h2>
                <hr>
                 <a href=""><img src="../images/youtube.png"><a>
                    <a href=""><img src="../images/facebook.png"><a>
                    <a href=""><img src="../images/instagram.png"><a>
                    </a>
                        
            </div>
    
        </div>
            <div class="webpage_bottom">
    
                <p style="color:#ffff; text-align:center;">©2024 Techsa.All right reserved</p>
    
            </div>    
    
    </footer>
   </div>
</body>

</html>

</html>
   
   