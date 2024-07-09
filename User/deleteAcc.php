<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {
            background-color: white;
        }
    </style>
    <title>Delete Account</title>
</head>

<body>
    <?php
    require 'config/config.php';

    if (isset($_POST["id"])) {
        $customerID = $_POST["id"];

        $sql = "DELETE FROM customer WHERE CID = $customerID";

        if ($conn->query($sql)) {
            echo "<script>alert('Account successfully deleted.');</script>";
            echo "<script>window.location.replace('/iwt/login.php');</script>";
            exit();
        } else {
            echo "<script>alert('Error deleting account: " . $conn->error . "');</script>";
            echo "<script>window.location.replace('/iwt/userprofile.php?id=" . urlencode($customerID) . "');</script>";
            exit();
        }
    } else {
        echo "<script>alert('Error: ID not set.');</script>";
        echo "<script>window.location.replace('/iwt/userprofile.php?id=" . urlencode($customerID) . "');</script>";
        exit();
    }

    ?>
</body>

</html>
