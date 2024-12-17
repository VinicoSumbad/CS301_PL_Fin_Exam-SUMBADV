<?php
if ($_POST['password'] !== $_POST['confirmPassword']) {     //Validating data
    echo "<p>Passwords do not match. Please try again.</p>";
    echo '<a href="register.html">Back to Register</a>';
    exit();
}

session_start();  //Storing user informations in a session
$_SESSION['users'][] = [
    'firstName' => $_POST['firstName'],
    'lastName' => $_POST['lastName'],
    'birthdate' => $_POST['birthdate'],
    'username' => $_POST['username'],
    'password' => $_POST['password'],
    'email' => $_POST['email'],
    'phone' => $_POST['phone'],
];

header('Location: index.html'); //Back toindex or front page
exit();
?>
