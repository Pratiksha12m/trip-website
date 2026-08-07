<?php

include("db.php");

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $destination=$_POST['destination'];
    $travelers=$_POST['travelers'];
    $duration=$_POST['duration'];
    $travel_date=$_POST['travel_date'];
    $room_type=$_POST['room_type'];
    $extras=$_POST['extras'];
    $full_name=$_POST['full_name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $requests=$_POST['requests'];

    $sql="INSERT INTO bookings
    (destination,travelers,duration,travel_date,room_type,extras,full_name,email,phone,requests)

    VALUES

    ('$destination','$travelers','$duration','$travel_date',
    '$room_type','$extras','$full_name','$email','$phone','$requests')";

    if(mysqli_query($conn,$sql))
    {
        echo "<script>
        alert('Booking Successful!');
        window.location='../index/index.php';
        </script>";
    }
    else
    {
        echo "Error : ".mysqli_error($conn);
    }

    mysqli_close($conn);
}

?>
/* CREATE TABLE bookings(

id INT AUTO_INCREMENT PRIMARY KEY,

destination VARCHAR(100),

travelers INT,

duration INT,

travel_date DATE,

room_type VARCHAR(50),

extras VARCHAR(50),

full_name VARCHAR(100),

email VARCHAR(100),

phone VARCHAR(20),

requests TEXT,

booking_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);