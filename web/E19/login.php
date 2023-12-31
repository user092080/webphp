<html>
<head>
<title>Login Form</title>
</head>
<body>
    <h2>Login Form</h2>
    <form method="GET" action="">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required><br>
        <input type="submit" value="Login" name="login">
    </form>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "09login";
$conn = mysqli_connect($servername, $username, $password, $db);
if ($conn) {
    if (isset($_REQUEST["login"])) {
        $username = $_REQUEST["username"];
        $password = $_REQUEST["password"];
        $sql = "SELECT * FROM table1";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result)) {
            if (($row['username'] == $username) && ($row['password'] == $password)) {
                header("Location: welcome.php?username=".$username);
                exit();
            } else {
                echo "<script>alert('Incorrect Username or Password')</script>";
            }
        }
    }
    mysqli_close($conn);
}
?>
</body>
</html>