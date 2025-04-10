<?php
session_start();
$token = bin2hex(random_bytes(16));
$_SESSION['confirmation'] = $token;
?>

<form method="POST" action="csfr_action.php">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <input type="hidden" name="confirmation" value="<?php echo $token; ?>">
    <input type="submit" value="Login">
</form>
