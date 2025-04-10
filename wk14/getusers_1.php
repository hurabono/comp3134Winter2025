<!-- getusers_1.php -->
<?php
$host = 'localhost';
$db = 'wk14_db';
$user = 'root';
$pass = 'Gmltn11433!';

$conn = new mysqli($host, $user, $pass, $db);

$firstname = $_GET['firstname'] ?? '';

$sql = "SELECT * FROM users WHERE firstname = '$firstname' AND active = 1";
$result = $conn->query($sql);
?>

<form method="GET">
    First Name: <input type="text" name="firstname">
    <input type="submit" value="Search">
</form>

<table border="1">
<tr><th>ID</th><th>Username</th><th>Email</th><th>First Name</th><th>Last Name</th></tr>
<?php
if ($result) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['username']}</td>
            <td>{$row['email']}</td>
            <td>{$row['firstname']}</td>
            <td>{$row['lastname']}</td>
        </tr>";
    }
}
?>
</table>
