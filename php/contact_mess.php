<?php

include("db.php");

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Checkbox value
    $newsletter = isset($_POST['newsletter']) ? "Yes" : "No";

    $sql = "INSERT INTO contact_messages
    (first_name, last_name, email, phone, subject, message, newsletter)
    VALUES
    ('$firstName','$lastName','$email','$phone','$subject','$message','$newsletter')";

    if (mysqli_query($conn, $sql)) {

        echo "<script>
        alert('Message Sent Successfully!');
        window.location='../index/index.php';
        </script>";

    } else {

        echo "Error : " . mysqli_error($conn);

    }

    mysqli_close($conn);
}

?>
/* CREATE TABLE contact_messages (

id INT AUTO_INCREMENT PRIMARY KEY,

first_name VARCHAR(100),

last_name VARCHAR(100),

email VARCHAR(100),

phone VARCHAR(20),

subject VARCHAR(255),

message TEXT,

newsletter VARCHAR(10),

created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

); 