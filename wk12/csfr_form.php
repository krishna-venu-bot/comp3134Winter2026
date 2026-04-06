<?php
session_start();
$_SESSION["confirmation"] = bin2hex(random_bytes(16));
?>

<!DOCTYPE html>
<html>
<body>

<form method="POST" action="csfr_action.php">
    <input type="hidden" name="confirmation" value="<?php echo $_SESSION['confirmation']; ?>">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <button type="submit">Login</button>
</form>

</body>
</html>
