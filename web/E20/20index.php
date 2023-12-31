<!DOCTYPE html>
<html>

<head>
   
    <title>Login</title>

</head>

<body>
    <form method="get" action="">
        <h2>Student Login</h2>
        <div>
            <label for="username">Email </label>
            <input type="text" name="email" id="username" required>
        </div>

        <div>
            <label for="password">Password </label>
            <input type="password" name="password" id="password" required>
        </div>

        <button type="submit" name="login" value="login">Login</button>
        <p class="register-link">New user? <a href="20.php">Register here</a></p>
    </form>
</body>
<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "09login";

$conn = mysqli_connect($host, $username, $password, $database);

if ($conn) {
    if (isset($_REQUEST["login"])) {
        $mail = $_REQUEST["email"];
        $password = $_REQUEST["password"];

        $sql = "SELECT * FROM students";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_array($result)) {
            if (($row['mail'] == $mail) && ($row['password'] == $password)) {
                setcookie("user_email", $mail, time() + (86400 * 30), "/");
                header("Location:studentdetails.php");
                exit();
            } else {
                $flag=0;
            }
        }
        if($flag==0){
            echo "<script> alert('Incorrect Username or Password') </script>";
        }
    }

    mysqli_close($conn);
}
?>
</html>