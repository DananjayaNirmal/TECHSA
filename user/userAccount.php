
<!DOCTYPE html>
<html>
<head>
    <title>Online Customer support</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<!--link rel="stylesheet" type="text/css" href="style.css"-->
 
<link rel="stylesheet" href="admin/font_res">

<style>

*{
  font-family: "Poppins", sans-serif;
  font-weight: 400;
  font-style: normal;
}
table
    {
        margin-left:110px;
        border:none;
        border-top:2px soid black;
        width:100%;
    }

    table td
    {
        font-size:20px;
        text-align:center;
    }

    button
    {
        width:100px;
        height:30px;
        background-color:blue;
        border:none;
        color:white;
        border-radius:5px;
        margin-left:53%;
        margin-top:40px;
    }

    body
    {
        background-image: linear-gradient(to left, #f3e7e9 0%, #e3eeff 99%, #e3eeff 100%);
    }


</style>
 
</head>
<body>
   
<div style="width:30px; display:flex; ">
    <img src="T.png" style="width:80px; ">
    <a href = ""><img src="T.png" style="width:10px;  position:absolute; left:90%;  "></a>
    <a href = ""><img src="T.png" style="width:10px;  position:absolute; left:95;"></a>
   
</div>  

<div class="userMainMid" style="display:flex;">
    <h2 style="margin-top:40px; margin-left:70px; font-weight:bold;">My inquiries</h2>
    <button>new inquire</button>
</div>

<div style="width:70%; height:100%; background-color:white; margin-left:70px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
 
  
<form action="">
      <input type="text" placeholder="Search here" name="search" style="width:20%; margin:10px; outline:none;">
      <input type="button" value = "Search" name="" style="width:8%; height:27px; margin:10px; border:none; border-radius:5px; background-color:blue; border:none; color:white;">
      <hr style="border-top:1px solid #D3D3D3">
      <p style="text-align:center; margin-top:200px;"> <?php
 
 require 'config/config.php';
 
 

$sql = "SELECT  reply FROM agentReply";
 
/*$result = $conn -> query($sql);*/
$result = mysqli_query($conn,$sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div style = 'margin-top:-150px; margin-left:1px; width:71%; border:1px solid gray;'>" . $row['reply'] . "</div><br>
        <div style='margin-left:1px;'>
            <form>
                <textarea rows='8' cols='100' name='ureply' style = 'border:1px solid gray;outline:none;'></textarea>
                <br>
                <input type='button' value='reply' name='usend' style = 'padding:3px 15px 3px 15px; background-color:gray;border:none; color:#fff;'>
            </form>
        </div>
        ";
        break;
    }
} else {
    echo "<h3>No submitted inquiries</h3>";
}


$conn->close();
?></p>
      <p style="margin:200px 0px 0px 0px;"><a href=""><img src="images/calendar.png" style="width:10px;"></p>
      
    </form>
               


 
</div>



 


      
</body>
</html>    