<?php
session_start();

// Validate login
$foundUser = null;
foreach ($_SESSION['users'] as $user) {
    if ($user['username'] === $_POST['username'] && $user['password'] === $_POST['password']) {
        $foundUser = $user;
        break;
    }
}

if ($foundUser) {
    // Successful login
    echo "<h1>Welcome {$foundUser['firstName']} {$foundUser['lastName']}</h1>";
    echo "<p>Birthdate: {$foundUser['birthdate']}</p>";
    echo "<p>Email Address: {$foundUser['email']}</p>";
    echo "<p>Phone Number: {$foundUser['phone']}</p>";
} else {
    // Failed login
    echo "<p>Login failed. Please try again.</p>";
    echo '<a href="index.html">Back to Index</a>';
}
?>
