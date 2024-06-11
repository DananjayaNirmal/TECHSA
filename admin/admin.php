
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
 
<link rel="stylesheet" href="../style.css">

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
</style>
 
</head>
<body>
<div>    
    <div class="side_bar">
        <a href="#home"><i class ="fa fa-fw fa-home"></i>Home</a> 
        <!--a href=""><i class ="fa fa-fw fa-wrench"></i>Inquries</a--> 
        <a href="add_deleteUser.php"><i class ="fa fa-fw fa-user"></i>User</a>
        
        <a href="add_deleteUser.php"><div style="color:red"><i class ="fa fa-fw fa-wrench"></i>Add/remove</div></a>
        <a href="updateUser.php"><div style="color:red"><i class ="fa fa-fw fa-wrench"></i>Update</div></a>
         
        <a href="add_delete_admin.php"><i class ="fa fa-fw fa-user"></i>Admin</a>
        <a href="add_delete_admin.php"><div style="color:red"><i class ="fa fa-fw fa-wrench"></i>Add/remove</div></a>
        <a href="updateAdmin.php"><div style="color:red"><i class ="fa fa-fw fa-wrench"></i>Update</div></a>
    </div>

<!--Without the side bar-->
    <div class="without_side_bar">

        </br>
        <h2 style="margin:0px 0px 20px 0px; text-align:center;">Submitted Inquries</h2></br>

    </div>

</div>
 


<?php
 
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
?>

<div style="width:30px; position:absolute; top:800px;"><a href="calender.php"><img src="../images/calendar.png" style ="width:30px;"></a>
</div>
<a href="../index.php"><img src="../images/out.png" style="width:30px; margin-left:1400px; margin-top:380px;"></a>


      
</body>
</html>    