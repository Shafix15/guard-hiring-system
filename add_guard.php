<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $experience = $_POST['experience'];
    $availability = $_POST['availability'];

    $sql = "INSERT INTO guards (name, experience, availability) VALUES ('$name', '$experience', '$availability')";
    if ($conn->query($sql) === TRUE) {
        echo "Guard added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<form method="post" action="">
    Name: <input type="text" name="name" required><br>
    Experience: <input type="number" name="experience" required><br>
    Availability: <input type="text" name="availability" required><br>
    <input type="submit" value="Add Guard">
</form>
