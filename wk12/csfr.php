
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    if ($username === "host" && $password === "pass") {
        echo "<div id='splash'>Login successful!</div>";
    } else {
        echo "<div id='splash'>Login failed!</div>";
    }
}
?>
<form method="POST">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" value="Login">
</form>
