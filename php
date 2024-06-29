<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $email = $_POST['email'];
    $password = $_POST['password'];
    $location = $_POST['location'];

    // Here you can perform validation, authentication, database operations, etc.
    // For now, let's just display the submitted data back to the user.
    echo "<h2>Submitted Data:</h2>";
    echo "<p>Email: $email</p>";
    echo "<p>Password: $password</p>";
    echo "<p>Location: $location</p>";
}
?>
