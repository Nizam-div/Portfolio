<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $check_in = $_POST["check_in"];
    $check_out = $_POST["check_out"];
    $adults = $_POST["adults"];
    $childrens = $_POST["childrens"];
    $rooms = $_POST["rooms"];
   
    // Process the data as needed (e.g., store in the database or perform further actions)
    // For this example, we'll just display the data to the user.

    echo "<h2> Just a minute we are checking :</h2>";
    echo "<p>Check-in Date: $check_in</p>";
    echo "<p>Check-out Date: $check_out</p>";
    echo "<p>Adults: $adults</p>";
    echo "<p>Children: $childrens</p>";
    echo "<p>Rooms: $rooms</p>";
    
}

?>