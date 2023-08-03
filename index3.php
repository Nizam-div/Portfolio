<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $check_in = $_POST["check_in"];
    $check_out = $_POST["check_out"];
    $adults = $_POST["adults"];
    $childrens = $_POST["childrens"];
    $rooms = $_POST["rooms"];
    $room_type = $_POST["type"];

    // Process the data as needed (e.g., store in the database or perform further actions)
    // For this example, we'll just display the data to the user.

    echo "<h2> We recieved your Form Just a Minute we are checking :</h2>";
    echo "<p>Name: $name</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Check-in Date: $check_in</p>";
    echo "<p>Check-out Date: $check_out</p>";
    echo "<p>Adults: $adults</p>";
    echo "<p>Children: $childrens</p>";
    echo "<p>Rooms: $rooms</p>";
    echo "<p>Room Type: $room_type</p>";
}

?>