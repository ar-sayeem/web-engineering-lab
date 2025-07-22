<!DOCTYPE html>
<html>
<head>
    <title>Registration Result</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .success { color: green; font-weight: bold; }
        .info { background: #f9f9f9; padding: 15px; margin: 10px 0; border-left: 4px solid green; }
        .btn { background: #007bff; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; display: inline-block; margin-top: 15px; }
        .btn:hover { background: #0056b3; }
    </style>
</head>
<body>

<?php
function db_conn(){
    $conn = new mysqli("localhost", "root", "", "61_H1");
    if ($conn->connect_error) die("Connection Failed!");
    echo "<div class='success'>✓ Connected Successfully!</div>";
}

db_conn();

$name = $_POST['myname'];
$id = $_POST['myid'];
$marks = $_POST['mymarks'];

echo "<div class='success'>✓ Data Received Successfully!</div>";
echo "<div class='info'>";
echo "<strong>Student Information:</strong><br>";
echo "Name: $name <br>";
echo "ID: $id <br>";
echo "Marks: $marks";
echo "</div>";
?>

<a href="student _info.php" class="btn">← Back to Form</a>

</body>
</html>