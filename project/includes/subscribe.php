<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Here you would typically save to a database
        // For now, we'll just redirect back with a success message
        header('Location: ../?subscribed=true');
        exit;
    }
    
    header('Location: ../?error=invalid_email');
    exit;
}
?>