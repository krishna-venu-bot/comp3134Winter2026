<?php
$username = "krishna";
$passwords = ["123456","password","123456789","12345","12345678","qwerty","1234567","111111","123123","abc123"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST["password"];

    if (in_array($input, $passwords)) {
        echo "Welcome $username to Your Portal";
        exit;
    }
}
?>

<form method="post">
<input type="hidden" name="username" value="krishna">
<label>Password</label>
<input type="password" name="password">
<br/>
<input type="submit">
</form>
