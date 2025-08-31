<?php

$servername = "localhost";
$username = "root";
$password ="";
$dbname="web_project";


$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "INSERT INTO registration  VALUES
 ('$_POST[fname]','$_POST[tid]','$_POST[email]',
 '$_POST[username]','$_POST[password]','$_POST[dob]',
 '$_POST[gender]','$_POST[country]','$_POST[address]')";

if($conn->query($sql) === true)
{
    echo "Submit Successful";
}
else
{
    echo "Try again".$conn->error;;
}
?>
<!-- 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind SQL statement
 (?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssssss", $_POST['fname'], $_POST['s_id'], $_POST['email'], $_POST['username'], $_POST['password'], $_POST['dob'], $_POST['gender'], $_POST['country'], $_POST['address']);

// Execute statement
if ($stmt->execute()) {
    echo "Successfully inserted.";
} else {
    echo "Error: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?> -->
