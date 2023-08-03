<?php

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "portfolio";

$conn = mysqli_connect($servername, $username, $password, $databasename);
if (!$conn) {
    die("Sorry, we can't connect to your database due to the following error: " . mysqli_connect_error());
} 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $current_timestamp = date("Y-m-d h:i:s A");

    $sql = "INSERT INTO `information` (`name`, `email`, `subject`, `message`, `datetime`) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param($stmt, "sssss", $name, $email, $subject, $message, $current_timestamp);

    if (mysqli_stmt_execute($stmt)) {
        echo "<h2> Information submitted successfully.<h2>";
    } else {
        echo "Information not submitted cuz we are facing some technical issues we are hope you will be contact us by email:";
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>
