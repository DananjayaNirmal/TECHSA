<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        input, textarea
        {
            width:70%;
            margin:10px;
            margin-left:20px;
            outline:none;
            border:0.5px solid #D3D3D3 ;
        }
        h3
        {
            margin:0;
            margin-top:10px;
            margin-left:20px;
        }

        .inputHeight
        {
            height:25px;
        }
        </style>
</head>
<body style="background-image: linear-gradient(to top, #f3e7e9 0%, #e3eeff 99%, #e3eeff 100%);">
    <div>
         <a ref="userAccount.php"><img src="images/logout.png" style="width:10px"></a>
    </div>

<div style = "width:70%; height:90%; background-color:#fff; margin:70px; padding-left:60px; padding-top:20px;   box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.2); ">


    <div>
        <form action="" method = "">

        <label for="_date"><h3>Insert the date</h3></label><br>
                <input type="text" id="dt" name="date" placeholder="2024.04.30" required class="inputHeight"><br>

                <label for="type"><h3>What kind of a inquiry do you wish to inform us?</h3></label><br>
                <input type="text" id="dist" name="in_type" placeholder="Payment issue/ Warranty issue/ Order issue/ Other" required class="inputHeight"><br>

                <h3>Briefly explain your issue</h3><br>
                <textarea name="message" rows="8" cols="200" required></textarea><br>

                <h3>Upload images or proof documents below</h3>
                <br>
                <input type="file" id="fileUpload" name="img_upload">
                <br>

                <input type="submit" value="Submit" name="submit_btn" style="width:80px; background-color:blue; color:#fff; border-radius:4px; padding:5px; 0px 5px 0px"> 
        <form>
        
    </div>

    <div>
    </div>


</div>



<?php

require 'config/config.php';

if(isset($_POST['submit_btn'])){

$insert_date=$_POST["date"];
$inqType = $_POST["in_type"];
$txtArea = $_POST["message"];
$file = $_POST["img_upload"];

$sql="INSERT INTO ticket(CID,ticketType,issue,date,file,ticketNo) VALUES('', '$inqType', '$txtArea','$insert_date', '$file')";
$redirect=$conn->query($sql);

if($redirect === true){
   /* header("location: Ticketread.php");*/
   echo "dddd";
}else{
    echo "error".$conn->error;
}

}
mysqli_close($conn);

?>
</body>
</html>