<?php
include 'db.php';

$sql = "SELECT * FROM guards";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["name"]. " - Experience: " . $row["experience"]. " - Availability: " . $row["availability"]. "<br>";
    }
} else {
    echo "No guards available";
}

$conn->close();
?>
