<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>About Us</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel='stylesheet' type='text/css' media='screen' href='aboutus.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='header_footer.css'>
   
</head>
<body>
<!-------------------------------------------------------------------------------------------------------->    
<!--div style="position:relative;">
<div class="top">
        <a href="#"><img src="images/logo.png" style="width:250px;  position:absolute; top:-19px;"></a>
        <button style="position:absolute; left:85%;"><a href="">Staff Login</button>
    </div>

      
        <nav>
            <div class="navbar">
            <a href="index.html"><img src="images/logo.png" class="logo"></a>
             
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="FAQ.html">FAQ</a></li> 
                    <li><a href="index.html">Contact</a></li>
                    <li><a href="Sign Up/About us.php">About</a></li>
                </ul> 
            </div>    
             
        </nav>
</div>
  <------------------------------------------------------------------------------------------------------>        
        
         
                <h2 style=";">Get to konow about us......</h2><br>
                    <div id= "visionText">
                       
                        
                    </div>
                     <div class="row">
                            <div class="column">
                                <h2 style="text-align:center;">Techsa By the Numbers</h2>
                            </div>
                            <div class="column">
                                <img src="../images/emp.jpg" width="50%">
                                <h3>30+ employees</h3>
                            </div>
                            <div class="column">
                                <img src="../images/customers.jpg" width="50%">
                                <h3>100+ customers</h3>
                            </div>
                        
                        </div>

                            <script>
                                // Vision statement
                                var visionStatement = "Our vision is to create an online customer support system that empowers users with easy access to expert assistance, extensive resources, and a flourishing community. We want to redefine the support experience by prioritizing personalized solutions, eventually encouraging long-term client pleasure and loyalty.";

                                // Function to display the vision statement word by word
                                function displayVisionStatement() {
                                var container = document.getElementById("visionText");
                                var words = visionStatement.split(" ");
                                var i = 0;
                                var timer = setInterval(function() {
                                    if (i < words.length) {
                                    container.textContent += words[i] + " ";
                                    i++;
                                    } else {
                                    clearInterval(timer);
                                    }
                                }, 100); // Adjust the speed of the typewriter effect
                                }

                                // Call the function to display the vision statement when the page loads
                                displayVisionStatement();
                            </script>  
                           
                           
    <table>
        <tr>
            <th>Name</th>
            <th>Feedback</th>
        </tr>
        <?php
            require '../config/config.php';
        
            $sql= "SELECT * FROM feedback";
            $result=mysqli_query($conn, $sql);

            if(mysqli_num_rows($result)>0){

                 while($row = mysqli_fetch_assoc($result)){

                    echo "<tr><td>".$row["Name"]."</td><td>" .$row["feedback"]."</td></tr>";
                 }

            }
        $conn->close();
        ?>
        <!-- <tr>
            <td>***** Baba</td>
            <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti, facilis?</td>
        </tr> -->
    </table>










    

 <!-------------------------------------------------------------------------------------------------------->                       

<!--footer>
    
    <div class="ftr">
        <div class="ftr_2">
            <a href="#" ><img src="../images/logo.png" alt="LOGO"></a>
            <!--p style="margin-bottom:15px; margin-left:50px; text-align:center;">We are providing high quality </br>customer service<br>Signup and make a inquiry</p>
            <p style="font-weight:bold; margin-right:50px;">techsasupport@gmail.com</p-->
        <!--/div>

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
<-------------------------------------------------------------------------------------------------------> 
</body>
</html>