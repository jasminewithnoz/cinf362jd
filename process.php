<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Retrieve form data
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $feedback = trim($_POST['feedback']);

    // Validate inputs
    if (empty($name) || empty($email) || empty($feedback)) {
        print '<p class="error">All fields are required.</p>';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        print '<p class="error">Invalid email format.</p>';
    } else {
        
        // Successful response
        print '<p>Thank you, ' . htmlspecialchars($name) .
            '! Your feedback has been received.</p>';
    }
} else {
    print '<p class="error">Invalid request.</p>';
}
?>