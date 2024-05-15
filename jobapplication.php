<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'databaseconnector.php';

    // Ensure the form fields are set
    $username = $_POST["username"] ;
    $email =  $_POST["email"];
    $phone = $_POST["phone"] ;
    $cover=$_POST["cover"];

    // Ensure the fields are not empty
    if (!empty($username) && !empty($email) && !empty($phone) && !empty($cover)) {
        // Your SQL insert query
        $sql = "INSERT INTO jobapplication (name, email, phone,cover) 
                VALUES ('$username', '$email', '$phone','$cover')";

        if (mysqli_query($conn, $sql)) {
            echo "Data inserted successfully";
        } else {
            echo "Failed to insert data: " . mysqli_error($conn);
        }
    } else {
        echo "Username, email, and phone are required fields.";
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    echo "Invalid request method";
}

?>
