<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Student Registration</h2>
        <form action="student_insert.php" method="post">
            <label>Name:</label>
            <input type="text" name="myname" required>
            
            <label>Student ID:</label>
            <input type="text" name="myid" required>
            
            <label>Marks:</label>
            <input type="number" name="mymarks" min="0" max="100" required>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>