<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee and Earning Details</title>
</head>
<body>
    <h1>Enter Employee and Earning Details</h1>

    <form action="display_employee.php" method="POST">
        <h3>Employee Details</h3>
        
        <label for="name">Employee Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="address">Employee Address:</label><br>
        <textarea id="address" name="address" required></textarea><br><br>

        <h3>Earning Details</h3>
        
        <label for="basic">Basic Salary:</label><br>
        <input type="number" id="basic" name="basic" required><br><br>

        <label for="da">DA (Dearness Allowance):</label><br>
        <input type="number" id="da" name="da" required><br><br>

        <label for="hra">HRA (House Rent Allowance):</label><br>
        <input type="number" id="hra" name="hra" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
