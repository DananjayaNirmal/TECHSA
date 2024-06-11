
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Customer feedback</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php
    require '../config/config.php';

    if(isset($_POST["button"]))
    
    {
        $feedback=$_POST["suggessions"];

        $sql="INSERT INTO feedback(feedback) VALUES ('$feedback')";
        
        if ($conn->query($sql)){
            echo "<script> alert('Feedback submitted successfully.')</script>";
        } else {
            echo "Error".$conn->error;
        }
        $conn->close();
    }
    
    
    
    ?>
    <section class="sect">
      
        <nav>
            <a href="index.html"><img src="../images/logo.png" class="logo"></a>
            <div class="navbar">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="index.html">FAQ</a></li> 
                    <li><a href="index.html">Contact</a></li>
                    <li><a href="index.html">About</a></li>
                </ul> 
            </div>   
        </nav>

    

    <div class="container">
        <div class="box1">
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                
                    
                    <h3>Help us to improve</h3><br>
                    
                    <p>Thank you for taking time to provide feedback. We appreciate hearing from you.</p><br>
                    <hr class="hr"><br>

                    <p>Would you recommend our services to your friends and colleagues? </p><br>
                
                    <input type="radio" id="yes" name="choice" value="Yes">
                    <label for="answer">Yes</label>

                    <input type="radio" id="no" name="choice" value="No">
                    <label for="answer">No</label><br><br>

                    <p>Do you have any suggessions to improve our service?</p>

                    <label for="suggessions"></label>
                    <textarea id="suggessions" name="suggessions" rows="7" cols="80"></textarea><br><br>


                    <p>Please leave your email address if you Would like us to contact you regarding any questions.</p><br>

                    <label for="name">Name</label><br>
                    <input type="text" id="name" name="name" placeholder="ex:name"><br><br>

                    <label for="email">Email Address</label><br>
                    <input type="email" id="subject" name="subject" placeholder="ex:myname@example.com"><br>

                   
                    <input type="submit" value="Submit feedback" name="button" class="btn"></button>

                

            </form>

        </div>
    </div>
</body>
</html>