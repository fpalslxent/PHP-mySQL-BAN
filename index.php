<?php
$conn = mysqli_connect("localhost", "root", "password" , "dbname");
$ip = $_SERVER['REMOTE_ADDR'];
$sql = "SELECT * FROM block WHERE ip='$ip'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    header('Location: ban.php');
}
?>