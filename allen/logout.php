<?php
setcookie('user_email', '', time() - 3600, '/');
header('Location: 20index.php');
exit();
?>
