<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $description = $_POST["description"];

    // Process the form data here (you can save it to a database or send it via email).

    // Send a response to the user
    echo "Thank you for joining our foundation, $name!";
} else {
    // Handle other request methods (GET, etc.) or direct access to the script.
    echo "Invalid request.";
}
?>
