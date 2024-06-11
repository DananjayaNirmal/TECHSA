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




    <!--section style="background-color:#ffff">
            <div class="box">
                <h2 style="margin-left:250px; color:#0B2D50;">What our customers say about us</h2>
                <div class="reviews">
                    <div class="box1">
                        <p>"The support staff was really helpful and quickly fixed my issue. Highly recommended"</p></br>
                        <p class="customer">-John David</p>
                    </div>
                    <div class="box1">
                        <p>"I appreciate the prompt and efficient service I received from your support team."</p></br>
                        <p class="customer">-Adriana Kim</p>
            
                    </div>
                    <div class="box1">
                        <p>"I had a complex issue, but your support team worked diligently to find a solution."</p></br>
                        <p class="customer">-Aurora Steele</p>
            
                    </div>
                </div>
               
            </div>
         
    </section-->


</body>
</html>