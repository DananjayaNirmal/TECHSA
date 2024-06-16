<?php
require "../config/config.php"

$areply = $_POST['areply']; 

$stmt = $conn->prepare("INSERT INTO agentReply(reply) VALUES('$areply')");

if ($stmt) {
     
    $stmt->bind_param("s", $areply);

     
    if ($stmt->execute()) {
        echo "Reply inserted successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    
    $stmt->close();
} else {
    echo "Error: " . $conn->error;
}

 
?>
