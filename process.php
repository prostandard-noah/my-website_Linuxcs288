<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email   = htmlspecialchars(trim($_POST['email'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    if (!empty($name) && !empty($email) && !empty($message)) {
        echo json_encode(["status" => "success", "message" => "Thank you for reaching out!"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Please fill out all required fields."]);
    }
}
?>
