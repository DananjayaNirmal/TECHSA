
<?php               //for insert 

require '../config/config.php';


if ($_SERVER["REQUEST_METHOD"] === "GET") {
    if (isset($_GET["id"])) {
        $customerID = $_GET["id"];
        $sql = "SELECT * FROM customer WHERE CID = $customerID";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $customerID = $row["CID"];
            $firstname = $row['firstName'];
            $lastname = $row['lastName'];
            $email = $row['email'];
            $phone = $row['phone'];
            $dob = $row['DOB'];
            $gender = $row['gender'];
            $pay = $row['pay'];
            $lane = $row['lane'];
            $street = $row['street'];
            $city = $row['city'];
            $postalcode = $row['postalCode'];
            $age = $row['age'];
        } else {
            echo "<script>alert('Cannot find account details !');</script>";
            echo "<script>window.location.replace('../iwt/login.php');</script>";
            exit();
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["submit"])) {

    if (isset($_POST["CID"])) {

        $customerID = $_POST["CID"];
        $firstname = $_POST["fname"];
        $lastname = $_POST["lname"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $dob = $_POST["dob"];
        $gender = $_POST["Gender"];
        $pay = $_POST["pay"];
        $lane = $_POST["lane"];
        $street = $_POST["street"];
        $city = $_POST["city"];
        $postalcode = $_POST["Pcode"];
        $age = $_POST['age'];

        $sql = "UPDATE customer SET firstName='$firstname', lastName='$lastname', email='$email', phone='$phone', DOB='$dob', pay='$pay', age=$age, gender='$gender', lane='$lane', street='$street', city='$city', postalCode=$postalcode WHERE CID= $customerID ";

        if ($conn->query($sql)) {
            echo "Update successful";
            $redirectURL = "../iwt/userprofile.php?id=" . urlencode($customerID);
            header("Location: $redirectURL");
            exit();
        } else {
            echo "<script>alert('Error: " . $conn->error . "');</script>";
        }
    } else {
        echo "<script>alert('Error: Customer ID not set.');</script>";
    }

}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type='text/css' media='screen' href="userprofile.css">

    <title>My Profile</title>

</head>
<div class="box1">

    <h1>Account Settings</h1>

    <div>

        <div class="navbar1">
            <ul class="nav-list">
                <li><a href="userprofile.php">My Profile</a></li>
                <li><a href="">Settings</a></li>
                <li><a href="myInquiries.php">My Tickets</a></li>
                 
                 
                <li><a href="">Notifications</a></li>
                <li>
                    <form id="deleteForm" action="delete.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $customerID ?? ''; ?>">
                        <button type="submit" class="list-button">Delete Account</button>
                    </form>
                </li>
            </ul>

                <div class="container">

                    <div class="content">

                        <form method="post">

                            <div class="row">
                                <div class="group">
                                    <label for="CID">Customer ID</label><br>
                                    <input type="text" id="CID" name="CID" value="<?php echo $customerID ?? ''; ?>"
                                        readonly>
                                </div>
                                <div class="group">
                                    <label for="phone">Contact number</label><br>
                                    <input type="tel" id="phone" name="phone" value="<?php echo $phone ?? ''; ?>">
                                </div>
                            </div>

                            <div class="row">
                                <div class="group">
                                    <label for="fname">First Name</label><br>
                                    <input type="text" id="fname" name="fname" value="<?php echo $firstname ?? ''; ?>">
                                </div>
                                <div class="group">
                                    <label for="lname">Last Name</label><br>
                                    <input type="text" id="lname" name="lname" value="<?php echo $lastname ?? ''; ?>">
                                </div>
                            </div>

                            <div class="row">
                                <div class="group">
                                    <label for="email">Email</label><br>
                                    <input type="email" id=" email" name="email" value="<?php echo $email ?? ''; ?>">
                                </div>
                                <div class="group">
                                    <label for="age">Age</label><br>
                                    <input type="number" id="age" name="age" value="<?php echo $age ?? ''; ?>">
                                </div>
                            </div>

                            <div class="row">
                                <div class="group">
                                    <label for="dob">Date of Birth</label><br>
                                    <input type="date" id="date" name="dob" value="<?php echo $dob ?? ''; ?>"></input>
                                </div>

                                <div class="group">
                                    <label for="Gender">Gender</label><br>
                                    <select id="Gender" name="Gender">
                                        <?php
                                        $genders = array("male", "female");
                                        foreach ($genders as $genderName) {
                                            echo "<option value='$genderName' " . ($genderName === $gender ? "selected" : "") . ">$genderName</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="group">
                                    <label for="pay">Payment Method</label><br>
                                    <input type="text" id="pay" name="pay" placeholder="Visa/master/Cash"
                                        value="<?php echo $pay ?? ''; ?>">
                                </div>
                            </div>

                            <div class="row">
                                <div class="group">
                                    <label for="lane">Lane</label><br>
                                    <input type="text" id="lane" name="lane" value="<?php echo $lane ?? ''; ?>">
                                </div>
                                <div class="group">
                                    <label for="street">Street</label><br>
                                    <input type="text" id="street" name="street" value="<?php echo $street ?? ''; ?>">
                                </div>
                            </div>

                            <div class="row">

                                <div class="group">
                                    <label for="city">City </label><br>
                                    <input type="text" id="city" name="city" value="<?php echo $city ?? ''; ?>">
                                </div>
                                <div class="group">
                                    <label for="Pcode">Postal code</label><br>
                                    <input type="text" id="pcode" name="Pcode" value="<?php echo $postalcode ?? ''; ?>">
                                </div>
                            </div>

                            <div class="submit">
                                <button type="submit" class="button2" name="submit">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

</body>

</html>