<?php

session_start();

require_once "db.php";


if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email = trim($_POST["email"] ?? "");
    $password = $_POST["password"] ?? "";
    $confirmPassword = $_POST["confirmPassword"] ?? "";

    $terms = isset($_POST["terms"]) ? 1 : 0;
    $newsletter = isset($_POST["newsletter"]) ? 1 : 0;


    // Function to show popup and go back
    function showError($message)
    {
        echo "<script>
                alert(" . json_encode($message) . ");
                window.history.back();
              </script>";
        exit;
    }


    // Email validation
    if (empty($email)) {
        showError("Please enter your email address.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        showError("Please enter a valid email address.");
    }


    // Password validation
    if (empty($password)) {
        showError("Please enter a password.");
    }

    if (strlen($password) < 8) {
        showError("Password must be at least 8 characters.");
    }

    if (!preg_match("/[A-Z]/", $password)) {
        showError("Password must contain at least one uppercase letter.");
    }

    if (!preg_match("/[0-9]/", $password)) {
        showError("Password must contain at least one number.");
    }


    // Confirm password
    if ($password !== $confirmPassword) {
        showError("Passwords do not match.");
    }


    // Terms
    if ($terms !== 1) {
        showError("Please agree to the Terms of Service and Privacy Policy.");
    }


    // Check existing email
    $check = $conn->prepare(
        "SELECT id FROM users WHERE email = ?"
    );

    $check->bind_param("s", $email);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        $check->close();
        showError("This email is already registered.");
    }

    $check->close();


    // Hash password
    $hashedPassword = password_hash(
        $password,
        PASSWORD_DEFAULT
    );


    // Insert user
    $stmt = $conn->prepare(
        "INSERT INTO users 
        (email, password, terms_accepted, newsletter)
        VALUES (?, ?, ?, ?)"
    );

    $stmt->bind_param(
        "ssii",
        $email,
        $hashedPassword,
        $terms,
        $newsletter
    );


    if ($stmt->execute()) {

        $stmt->close();
        $conn->close();

        echo "<script>
                alert('Account created successfully!');
                window.location.href = '../pages/login.php';
              </script>";

        exit;

    } else {

        $stmt->close();
        $conn->close();

        showError("Registration failed. Please try again.");
    }
}

$conn->close();

?>
/* CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    terms_accepted TINYINT(1) NOT NULL DEFAULT 0,
    newsletter TINYINT(1) NOT NULL DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);