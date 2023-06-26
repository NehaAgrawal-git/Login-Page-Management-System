<?php

/**
 * Function to create connection.
 */
function getConnection() {
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "varthak";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    return null;
}

return $conn;
}

function getUserDetailsFromUserName($username) {
    $connection = getConnection();

    if ($connection == null) {
        return;
    }
    // SQL query to retrieve user data
    $sql = "SELECT password FROM users WHERE user_name='$username'";

    // Execute the query
    $result = $connection->query($sql);
    $connection->close();
    return $result;
  }
?>