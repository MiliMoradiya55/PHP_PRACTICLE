<?php
// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Get the input value
    $name = $_POST['name'];

    // Set the cookie with the input value
    setcookie('username', $name, time() + 3600, '/');

    // Redirect to display the cookie value
    header('Location: cookie_display.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookie Example</title>
</head>
<body>
    <h1>Cookie Example</h1>

    <!-- Display a form to input the name -->
    <form method="POST" action="">
        <label for="name">Enter your name:</label>
        <input type="text" name="name" id="name" required>
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>