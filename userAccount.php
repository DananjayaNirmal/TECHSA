
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
        margin-left:51%;
        margin-top:40px;
    }

    body
    {
        background-image:linear-gradient(to top, #fff1eb 0%, #72bcd4 100%)
    }


</style>
 
</head>
<body>
   
<div style="width:30px; display:flex; ">
    <img src="T.png" style="width:80px; ">
    <a href = ""><img src="T.png" style="width:10px;  position:absolute; left:90%;  "></a>
    <a href = ""><img src="T.png" style="width:10px;  position:absolute; left:95%;  "></a>
   
</div>  

<div class="userMainMid" style="display:flex;">
    <h2 style="margin-top:40px; margin-left:36px; font-weight:bold;">My inquiries</h2>
    <button>new inquire</button>
</div>

<div style="width:70%; height:100%; background-color:white; margin-left:40px;">
 
  
<form action="">
      <input type="text" placeholder="Search here" name="search" style="width:20%; margin:10px; outline:none;">
      <input type="button" value = "Search" name="" style="width:8%; height:27px; margin:10px; border:none; background-color:gray; border-radius:5px;">
      <hr>
      <p style="text-align:center; margin-top:200px;">No submitted inquiries</p>
      <p style="margin:200px 0px 0px 0px;"><a href=""><img src="images/calendar.png" style="width:10px;"></p>
      
    </form>
               


 
</div>

<!--?php
 
 require '../config/config.php';
 
 

$sql = "SELECT ticketNo ,ticketType ,issue ,date FROM ticket";
 
/*$result = $conn -> query($sql);*/
$result = mysqli_query($conn,$sql);

if( $result -> num_rows > 0){

   echo "<table border='0' style='margin-left:170px;'>";
   echo "<tr>
      
    
        <th>No</th>
        <th>TicketType</th>
        <th>Description</th>
        <th>Date</th>
        <th>Actin</td>

    </tr>";

    while ($row = $result -> fetch_assoc()){
           
        echo "<tr><td>" . $row['ticketNo'] ."</td><td> " . $row['ticketType'] . " </td><td>" . $row['issue'] . " </td><td>" .$row['date'] . "</td><td><button><a href='inquiry.php' >Reply</a></button><button type='button' name='delete'><a href='delete_inquiry.php'>Delete</a></buttton></td></tr>";
         

    } 
 

    echo "</table>";    

}   


else
{
    echo "<script> alert('no inquiries submitted recently') </script>";
}


$conn->close();
?-->

 


      
</body>
</html>    