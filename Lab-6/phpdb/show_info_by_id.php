<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "61_H1";


$conn = new mysqli($host, $username, $password, $database);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['myid'];
    
    // First functionality: Search student by ID
    echo "<h3>Search Result for ID: $id</h3>";
    $result = $conn->query("SELECT * FROM `students` WHERE `id` = '$id'");
    $stdinfo = $result->fetch_assoc();

    if ($stdinfo) {
        echo "Name: " . $stdinfo["name"] . "<br>";
        echo "ID: " . $stdinfo["id"] . "<br>";
        echo "Marks: " . $stdinfo["marks"] . "<br>";
    } else {
        echo "No student found with ID: $id";
    }

    echo "<hr>"; // Separator line

    // Second functionality: Show all students with marks below 50
    echo "<h3>Students with Marks Below 50:</h3>";
    $result = $conn->query("SELECT * FROM `students` WHERE marks < 50");

    if ($result->num_rows > 0) {
        while($stdinfo = $result->fetch_assoc()) {
            echo "Name: " . $stdinfo["name"] . " | ";
            echo "ID: " . $stdinfo["id"] . " | ";
            echo "Marks: " . $stdinfo["marks"] . "<br>";
        }
    } else {
        echo "No students found with marks below 50.";
    }
}

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="Enter ID">Enter ID:</label>
        <input type="text" name="myid">

        <button type="submit">Submit</button>


    </form>
</body>
</html>