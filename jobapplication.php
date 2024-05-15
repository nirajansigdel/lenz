<?php



// CREATE TABLE jobapplication (
//     id INT(7) PRIMARY KEY AUTO_INCREMENT,
//     name VARCHAR(100) NOT NULL,
//     email VARCHAR(100) NOT NULL,
//     phone INT(11) NOT NULL,
//     cover TEXT NOT NULL,
//     resume BLOB NOT NULL,
//     formcondition TINYINT(1) NOT NULL
// ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'databaseconnector.php';
    $username = $_POST["username"] ;
    $email =  $_POST["email"];
    $phone = $_POST["phone"] ;
    $cover=$_POST["cover"];
    $resume=$_POST["resume"];
    $formcondition = isset($_POST['formcondition']) ? 1 : 0;


    if (!empty($username) && !empty($email) && !empty($phone) && !empty($cover) && !empty($resume) && !empty($formcondition)) {
        $sql = "INSERT INTO jobapplication (name, email, phone,cover,resume,formcondition) 
                VALUES ('$username', '$email', '$phone','$cover','$resume' ,'$formcondition')";

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
