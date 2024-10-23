<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit;
}

$review = htmlspecialchars(trim($_POST['review']));

// Insert review into the database
// You can create a reviews table with a user_id foreign key
// ...

?>
