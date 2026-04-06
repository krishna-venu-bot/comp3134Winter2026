<?php
session_start();

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $session_token = $_SESSION["confirmation"];
    $post_token = $_POST["confirmation"];

    if ($session_token === $post_token) {

        $username = $_POST["username"];
        $password = $_POST["password"];

        if ($username == "host" && $password == "pass") {
            $message = "Secure Login successful!";
        } else {
            $message = "Login failed!";
        }

    } else {
        $message = "CSRF attack detected!";
    }
}
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

<div><?php echo $message; ?></div>

</body>
</html>
