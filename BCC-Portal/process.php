<?php
// process.php [cite: 17]
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture data using $_POST method [cite: 39]
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Display success feedback 
    echo "<h1>Thank You, $name!</h1>";
    echo "<p>Your message regarding '<strong>$subject</strong>' has been received.</p>";
    echo "<hr>";
    echo "<h3>Submission Details:</h3>";
    echo "<ul>";
    echo "<li><strong>Email:</strong> $email</li>";
    echo "<li><strong>Message:</strong> $message</li>";
    echo "</ul>";
    echo "<a href='index.php'>Return to Home</a>";
} else {
    // Redirect back if accessed directly
    header("Location: contact.php");
    exit();
}
?>