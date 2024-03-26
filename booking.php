<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $event_date = $_POST['event_date'];
    $event_time = $_POST['event_time'];
    $guests = $_POST['guests'];
    $special_requests = $_POST['special_requests'];

    // Process your booking logic here (e.g., save to database)

    // Redirect to the thank you page after successful submission
    header("Location: thank_you.php");
    exit;
} else {
    // If the form is not submitted, redirect back to the form page
    header("Location: index.html");
    exit;
}
?>
