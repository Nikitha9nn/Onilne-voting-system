<?php
include ("connect.php");
// If form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $name = $connect->real_escape_string($_POST['name']);
    $email = $connect->real_escape_string($_POST['email']);
    $message = $connect->real_escape_string($_POST['message']);

    // Insert user's message into the database
    $sql = "INSERT INTO contactz (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($connect->query($sql) === TRUE) {
        echo "
                <script>
                alert('message sent successful');
                window.location= '../index.php';
                </script>
            ";
    } else {
        echo "
                <script>
                alert('message not sent some error occured');
                window.location= '../index.php';
                </script>
            ";
    }
}

// Close connection

?>