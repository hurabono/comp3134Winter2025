<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $session_token = $_SESSION['confirmation'] ?? '';
    $form_token = $_POST['confirmation'] ?? '';

    if ($session_token === $form_token) {
        echo "CSRF Check Passed.";
    } else {
        echo "CSRF Check Failed.";
    }
}
?>
