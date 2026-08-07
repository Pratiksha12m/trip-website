<?php
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO messages
            (name, email, subject, message)
            VALUES
            ('$name', '$email', '$subject', '$message')";

    if (mysqli_query($conn, $sql)) {

        echo "<script>
                alert('Message Sent Successfully!');
                window.location='../index/index.php';
              </script>";

    } else {

        echo "Error: " . mysqli_error($conn);

    }

    mysqli_close($conn);
}
?>

/* travel_db
CREATE TABLE messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    subject VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
*/