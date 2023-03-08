<?php
$conn = mysqli_connect("localhost", "root", "password" , "dbname");
$ip = $_SERVER['REMOTE_ADDR'];
$sql = "SELECT * FROM block WHERE ip='$ip'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    header('HTTP/1.1 403 Forbidden');
    ?>
    <title>Your IP address has been blocked.</title>
    <h1>Your IP address has been blocked.</h1>
    Your IP: <?php echo $ip; ?><br>
    Your User Agent: <?php echo $_SERVER['HTTP_USER_AGENT']; ?>
    <?php
}else{
    ?>
    <script>
        window.history.back();
    </script>
<?php
}
?>