<html lang="en">
<head>
    <title>Welcome Message Input</title>
</head>
<body>
    <h1>Enter Details</h1>
    <form action="display.php" method="POST">
        <label for="font">Font Name:</label>
        <input type="text" id="font" name="font" required><br><br>
        
        <label for="bgcolor">Background Color (e.g., #FF5733 or 'red'):</label>
        <input type="text" id="bgcolor" name="bgcolor" required><br><br>
        
        <label for="message">Welcome Message:</label>
        <textarea id="message" name="message" required></textarea><br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>

